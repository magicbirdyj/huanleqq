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

    
    
    
            
}


