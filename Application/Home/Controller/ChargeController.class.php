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
        mkdir('./Public/error/pay_error.txt');
        file_put_contents('./Public/error/pay_error.txt', 'asdfafa',FILE_APPEND);
        file_put_contents('./Public/error/pay_error.txt', $returnPay,FILE_APPEND);
        $wxpay_no=$returnPay["out_trade_no"];
        $Wxpay_orderModel = D('Wxpay_order');
            $wxpay_order = $Wxpay_orderModel->where("wxpay_no='{$wxpay_no}'")->find();
         
            $chargemodel = D('Charge');
            $user_id=$wxpay_order['wxpay_user_id'];
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
            }
            
            echo "success";
        
        
        
        
        
        
        
        if (!$returnPay || $returnPay[""]) {
            echo "fail";
        }
        
        if (array_key_exists("return_code", $returnPay) && array_key_exists("result_code", $returnPay) && $returnPay["return_code"] == "SUCCESS" && $returnPay["result_code"] == "SUCCESS") {
            $Wxpay_orderModel = D('Wxpay_order');
            $wxpay_order = $Wxpay_orderModel->where("wxpay_no='{$returnPay["out_trade_no"]}' and deleted=0 ")->find();
            //验证交易金额是否为订单的金额;
            if (!empty($returnPay['total_fee'])) {
                if ($returnPay['total_fee'] !=$wxpay_order['wxpay_dues'] * 100) {
                    file_put_contents('./a_error.txt',$returnPay['total_fee'],FILE_APPEND);
                    file_put_contents('./a_error.txt',$_GET['dues'],FILE_APPEND);
                    echo "fail";
                }
            } 
            $chargemodel = D('Charge');
            $user_id=$wxpay_order['wxpay_user_id'];
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
            }
            
            echo "success";
        }
    }

  

    

 
    
    
    
    public function gmcg_wx(){
        $this->get_weixin_config();
        $this->assign('title','付款成功');
        $order_id=$_GET['order_id'];
        $user_id=$_SESSION['huiyuan']['user_id'];
        $ordermodel=D('Order');
        $order=$ordermodel->where("order_id='{$order_id}' and deleted=0")->find();
        $this->assign('order', $order);
        if($user_id!=$order['user_id']){
            $this->error('您没有该订单！',U('Order/index'),3);
        }
        if($order['pay_status']!='1'){
            $this->error('未付款成功,将返回付款页面',U('Goods/zhifu',"order_id=$order_id"));
        }
        
        
        $order_goodsmodel=D('Order_goods');
        $order_goods=$order_goodsmodel->where("order_id='$order_id'")->select();
        $order_price=0;
        
        $this->assign('order_goods',$order_goods);

        $this->display('gmcg_dandu');

    }


}
