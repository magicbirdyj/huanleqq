<?php
namespace Home\Controller;
use  Home\Controller;
class GameController extends FontEndController {
    public function Index() {
        $user_id=$_SESSION['huiyuan']['user_id'];
        $usersmodel=D('Users');
        $users=$usersmodel->where("user_id='$user_id'")->find();
        $this->assign('balance',$users['balance']);
        //往期结果
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
    
}


