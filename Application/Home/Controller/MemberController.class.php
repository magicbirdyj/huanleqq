<?php
namespace Home\Controller;
use Home\Controller;
class MemberController extends FontEndController {
    
    public function index() {
        $user_id=$_SESSION['huiyuan']['user_id'];
        if(!$user_id){
            $login="no_login";
        }else{
            $login='login';
            $usersmodel=D('Users');
            $user=$usersmodel->where("user_id='{$user_id}'")->find();
            $this->assign('user',$user);
        }
        $this->assign('login',$login);
        $this->display();
    }
    
    public function money_pack() {
        $user_id=$_SESSION['huiyuan']['user_id'];
        if(!$user_id){
            $login="no_login";
        }else{
            $login='login';
            $usersmodel=D('Users');
            $user=$usersmodel->where("user_id='{$user_id}'")->find();
            $this->assign('user',$user);
        }
        $this->assign('login',$login);
        $this->display();
    }
    
    public function order_detail() {
        
        $user_id=$_SESSION['huiyuan']['user_id'];
        if(!$user_id){
            $login="no_login";
        }else{
            $login='login';
            $Ordermodel=D('Order');
            $order=$Ordermodel->where("user_id='{$user_id}'")->order('order_id desc')->limit(20)->select();
            $Order_goodsModel=D('Order_goods');
            foreach ($order as &$value) {
                $order_id=$value['order_id'];
                $value['goods']=$Order_goodsModel->where("order_id='{$order_id}'")->field('goods_name,goods_dues,goods_profit')->select();
            }
            $this->assign('order',$order);
        }
        $this->assign('login',$login);
        $this->display();
    }
    
    
    public function money_detail() {
        $user_id=$_SESSION['huiyuan']['user_id'];
        if(!$user_id){
            $login="no_login";
        }else{
            $login='login';
            $Chargemodel=D('Charge');
            $WithdrawModel=D('Withdraw');
            $charge=$Chargemodel->where("user_id='{$user_id}'")->order('charge_id desc')->limit(20)->select();
            $withdraw=$WithdrawModel->where("user_id='{$user_id}'")->order('withdraw_id desc')->limit(20)->select();
            $money=array_merge($charge,$withdraw);
            $money=$this->array_sort($money, 'time', 'desc');
            $this->assign('money',$money);
        }
        $this->assign('login',$login);
        $this->display();
    }

    private function array_sort($array,$row,$type){
        $array_temp = array();
        foreach($array as $v){
            $array_temp[$v[$row]] = $v;
        }
        if($type == 'asc'){
            ksort($array_temp);
        }elseif($type='desc'){
            krsort($array_temp);
        }else{
        }
        return $array_temp;
    }
    
    
            
}


