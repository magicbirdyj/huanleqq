<?php

namespace Home\Controller;

use Home\Controller;

class ChargeController extends FontEndController {


    public function index() {
        $user_id=$_SESSION['huiyuan']['user_id'];
        $usersmodel=D('Users');
        $user=$usersmodel->where("user_id='{$user_id}'")->find();
        $this->assign('user',$user);
        
        
        $this->assign('title','充值');
        if(is_weixin()){
            $this->assign('is_weixin','true');
        }else{
            $this->assign('is_weixin','false');
        }
        $this->display();
    }
    
    public function zhifu() {
        $dues=$_SESSION['dues'];
        $open_id=$_SESSION['huiyuan']['open_id'];
        if($open_id&&$dues){
            $this->alipay($open_id,$dues);
        }else{
            echo'没发现支付金额或者open_id';
        }
        
       
    }
    
     /**
     * 生成唯一的订单号 会查询订单表来保证唯一性
     * 
     */
    private function getUniqueOrderNo() {
        $code = getname();
        $Wxpay_orderModel=D('Wxpay_order');
        $res = $Wxpay_orderModel->where("wxpay_no='{$code}'")->find();
        if ($res) {
            $this->getUniqueOrderNo();
        }
        return $code;
    }

    //生成微信支付订单
    private function alipay($open_id,$dues) {
        //创建wxpay_order订单（不一定客户最终会支付，只是在微信生成了订单）
        $Wxpay_orderModel=D('Wxpay_order');
        $row=array(
            'wxpay_user_id'=>$_SESSION['huiyuan']['user_id'],
            'wxpay_no'=>$this->getUniqueOrderNo(),
            'wxpay_dues'=>$dues,
            'wxpay_time'=>time()
        );
        $Wxpay_orderModel->add($row);
        
        //微信
        $paydata=array(
            'body'=>sprintf("欢乐企鹅： 充值金额：%s",  mb_substr($dues.'元', 0, 25, 'utf-8')),
            'total_fee'=>$dues,
            'notify'=>PAY_HOST . U("Charge/notifyweixin"),
            'shop_name'=>'欢乐企鹅',
            'charge_no'=>$row['wxpay_no'],
            'open_id'=>$open_id,
            'goods_name'=>'企鹅纷纷乐'
        );
        
        if(is_weixin()){//如果是微信浏览器 直接公众号支付，否则 扫一扫支付
            $this->weixin_zhijiezhifu($paydata);
        }else{
            $this->weixin_saomazhifu($paydata);
        } 

    }
    
    private function weixin_zhijiezhifu($paydata){
            vendor('wxp.native'); //引入第三方类库
            $orderInput = new \WxPayUnifiedOrder();
            $orderInput->SetBody($paydata['body']);
            $orderInput->SetAttach($paydata['shop_name']);
            $orderInput->SetOut_trade_no($paydata['charge_no']);
            $orderInput->SetTotal_fee($paydata['total_fee'] * 100);
            $orderInput->SetGoods_tag($paydata['goods_name']);
            $orderInput->SetNotify_url($paydata['notify']);
            $orderInput->SetTrade_type("JSAPI");
            $orderInput->SetOpenid($paydata['open_id']);//必须为登录
            $orderInfo = \WxPayApi::unifiedOrder($orderInput, 300);

            if (is_array($orderInfo) && $orderInfo['result_code'] == 'SUCCESS') {
                $jsapi = new \WxPayJsApiPay();
                $jsapi->SetAppid($orderInfo["appid"]);
                $timeStamp = time();
                $timeStamp = "$timeStamp";
                $jsapi->SetTimeStamp($timeStamp);
                $jsapi->SetNonceStr(\WxPayApi::getNonceStr());
                $jsapi->SetPackage("prepay_id=" . $orderInfo['prepay_id']);
                $jsapi->SetSignType("MD5");
                $jsapi->SetPaySign($jsapi->MakeSign());
                $parameters = $jsapi->GetValues();
            } else {
                $this->error("下单失败" . $orderInfo['return_msg'],1000);
            }
            
            $this->assign('paydata',$paydata);
            $this->assign('ref',$_SESSION['ref']);
            $this->assign("parameters", json_encode($parameters));
            $this->display('zhifu');
    }
    
    

    /**
     * 微信支付的 异步回调
     * 
     */
    
  
    public function notifyweixin(){
        vendor('wxp.notify'); //引入第三方类库
        $notify = new \PayNotifyCallBack();
        $notify->Handle(false);
        $returnPay = $notify->getPayReturn();

        if (!$returnPay || $returnPay[""]) {
            echo "fail";
        }
        
        if (array_key_exists("return_code", $returnPay) && array_key_exists("result_code", $returnPay) && $returnPay["return_code"] == "SUCCESS" && $returnPay["result_code"] == "SUCCESS") {
            $wxpay_no=$returnPay["out_trade_no"];
            $Wxpay_orderModel = D('Wxpay_order');
            $wxpay_order = $Wxpay_orderModel->where("wxpay_no='{$wxpay_no}'")->find();
            $user_id=$wxpay_order['wxpay_user_id'];
            $dues=$wxpay_order['wxpay_dues'];
            //验证交易金额是否为订单的金额;
            if (!empty($returnPay['total_fee'])) {
                if ($returnPay['total_fee'] !=$wxpay_order['wxpay_dues'] * 100) {
                    file_put_contents('./a_error.txt',$returnPay['total_fee'],FILE_APPEND);
                    file_put_contents('./a_error.txt',$dues,FILE_APPEND);
                    echo "fail";
                }
            } 
            $chargemodel = D('Charge');
            $row = array(
                'user_id' =>$user_id, 
                'charge_no'=>"{$returnPay['out_trade_no']}",
                'charge_dues'=>$wxpay_order['wxpay_dues'],
                'charge_time' => time(),
                "pay_type" => 1,
                "trade_no" => "{$returnPay['transaction_id']}",
                "pay_info" => serialize($returnPay)
            );
            if (!$chargemodel->add($row)) {
                echo "fail";
            }else{
                $usersmodel=D('Users');
                $usersmodel->where("user_id='{$user_id}'")->setInc('balance',(int)$dues);
                //清除session
                session('dues',null); 
            }
            echo "success";
        }
    }
    
    public function withdraw() {

        
        $user_id=$_SESSION['huiyuan']['user_id'];
        $usersmodel=D('Users');
        $user=$usersmodel->where("user_id='{$user_id}'")->find();
        $this->assign('user',$user);
        
        
        $this->assign('title','提现');
        if(is_weixin()){
            $this->assign('is_weixin','true');
        }else{
            $this->assign('is_weixin','false');
        }
        $this->display();
    }
    
    public function withdraw_money() {
        $withdraw_dues=$_SESSION['withdraw_dues'];
        $open_id=$_SESSION['huiyuan']['open_id'];
        
        if($open_id&&$withdraw_dues){
            //先检测余额是否足够
            $user_id=$_SESSION['huiyuan']['user_id'];
            $UsersModel=D('Users');
            $balance=$UsersModel->where("user_id='{$user_id}'")->getField('balance');
            if($balance<$withdraw_dues){
                $this->error('余额不足');
            }
            $this->withdraw_pay($open_id,$withdraw_dues);
        }else{
            echo'没发现支付金额或者open_id';
        }
        
    }
    
    
    
    private function withdraw_pay($open_id,$dues) {
        vendor('wxp.native'); //引入第三方类库
        $withdraw_payInput = new \WxPaySendShoptransfers();
        //企业支付
        $amount=$dues*100;
        $send_name=$order['shop_name'];
        $withdraw_no=$this->getWithdrawNo();
        $withdraw_payInput->SetAmount($amount);//付款金额 int 单位分
        $withdraw_payInput->SetOpenid($open_id);//接收付款用户
        $withdraw_payInput->SetPartner_trade_no($withdraw_no);//商户订单号，需保持唯一性(只能是字母或者数字，不能包含有符号)
        $withdraw_payInput->SetCheck_name('NO_CHECK');//NO_CHECK：不校验真实姓名FORCE_CHECK：强校验真实姓名（未实名认证的用户会校验失败，无法转账）OPTION_CHECK：针对已实名认证的用户才校验真实姓名（未实名认证用户不校验，可以转账成功）
        $withdraw_payInput->SetDesc("提现");//企业付款描述信息
        $withdraw_payInfo = \WxPayApi::sendshoptransfers($withdraw_payInput, 300);
        //生成数据库里面Withdraw订单
        if (is_array($withdraw_payInfo) && $withdraw_payInfo['result_code'] == 'SUCCESS') {
            $WithdrawModel=D('Withdraw');
            $row=array(
                'withdraw_no'=>$withdraw_payInfo['partner_trade_no'],
                'user_id'=>$_SESSION['huiyuan']['user_id'],
                'withdraw_dues'=>$dues,
                'payment_no'=>$withdraw_payInfo['payment_no'],
                'withdraw_time'=>time(),
                'payment_time'=>$withdraw_payInfo['payment_time']
            );
            $result=$WithdrawModel->add($row);
            //余额减少
            $usersmodel=D('Users');
            $usersmodel->where("user_id='{$user_id}'")->setDec('balance',(int)$dues);
            //清除session
            session('withdraw_dues',null); 
            
            header("location:". $_SESSION['ref']);
        }
    }
    
    
    /**
     * 生成唯一的提现订单号 会查询订单表来保证唯一性
     * 
     */
    private function getWithdrawNo() {
        $code = getname();
        $WithdrawModel=D('Withdraw');
        $res = $WithdrawModel->where("withdraw_no='{$code}'")->find();
        if ($res) {
            $this->getWithdrawNo();
        }
        return $code;
    }


}
