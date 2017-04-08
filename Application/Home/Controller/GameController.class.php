<?php
namespace Home\Controller;
use  Home\Controller;
class GameController extends FontEndController {
    public function Index() {
        $user_id=$_SESSION['huiyuan']['user_id'];
        $usersmodel=D('Users');
        $users=$usersmodel->where("user_id='$user_id'")->find();
        $this->assign('balance',$users['balance']);
        $this->display();
    }
    
   
    
}


