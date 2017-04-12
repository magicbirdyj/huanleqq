<?php
namespace Home\Controller;
use Home\Controller;
class IndexController extends FontEndController {
   
    public function index(){
        echo phpinfo();exit;
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
    
    
    public function shi_wan() {
        $pre_result=$this->get_preresult();
        foreach ($pre_result as  &$value) {
            $result=$value['result'];
            $value['last_result']=((int)($result/100))%10+((int)($result/10))%10+((int)$result)%10;
        }
        $this->assign('pre_result',$pre_result);
        $this->display();
    }
    
    
    private function get_preresult() {
        $PreresultModel=D('Preresult');
        $arr_result=$PreresultModel->order('preresult_id desc')->limit(20)->select();
        return $arr_result;
    }
    
 













    public function get_new_order(){
        $time=  cookie('time');
        $ordermodel=D('Order');
        if((!cookie('new_order'))||cookie('new_order')==='a:0:{}'){
            $time=time();
            cookie('time',$time);
            if(!cookie('newest_order_id')){
                $new_order=$ordermodel->order('order_id desc')->field('order_id,user_id,created,order_address')->limit(6)->select();
                $str_new_order=  serialize($new_order);
                cookie('new_order',$str_new_order); 
                cookie('newest_order_id',$new_order[0]['order_id']);//记录最后一条order_id
            }else{
                $newest_order_id=  cookie('newest_order_id');
                $new_order=$ordermodel->where("order_id>$newest_order_id")->order('order_id desc')->field('order_id,user_id,created,order_address')->limit(6)->select();
                if(!$new_order[0]){
                    $this->ajaxReturn('0');exit();
                }
                $str_new_order=  serialize($new_order);
                cookie('new_order',$str_new_order);
                cookie('newest_order_id',$new_order[0]['order_id']);//记录最后一条order_id
            }
        }
        $arr_cookie=  unserialize(cookie('new_order'));
        $user=array_pop($arr_cookie);
        cookie('new_order',serialize($arr_cookie));
        $data=$this->get_user($user);
        $this->ajaxReturn($data);

    }
    
    
    
    private function get_user($new_order){
        $usersmodel=D('Users');
        $user_id=$new_order['user_id'];
        $order_address=$new_order['order_address'];
        $user=$usersmodel->where("user_id=$user_id")->field('user_name,head_url')->find();
        $arr_location=  explode(' ', $order_address);
        $location=$arr_location[1];
        $shijian=$this->shijian($new_order['created']);
        $data=array(
            'head_url'=>$user['head_url'],
            'text'=>'最新订单来自 '.$location.' 的 '.$user['user_name'].',  '.$shijian.'前'
        );
        return $data;
    }
    
    
    private function shijian($time){
        $second=time()-$time;
        if($second<60){
            $shijian=$second.'秒';
        }elseif($second<3600){
            $shijian=floor($second/60).'分钟';
        }elseif($second<86400){
            $shijian=floor($second/3600).'小时';
        }else{
            $shijian=floor($second/86400).'天';
        }
        return $shijian;
    }
    

   
    

    
    
   
    
}