<?php
namespace Home\Controller;
use  Home\Controller;
class AjaxnologinController extends FontEndController {
    
    
    
   //获取服务器时间
   public function get_time() {
       if($_POST['check']==='get_time'){
           $shijiancuo=time();
           $this->ajaxReturn($shijiancuo);
       }
   }

   //获取QQ在线人数
   public function get_qq_online() {
        $qq_online_url = "http://mma.qq.com/cgi-bin/im/online&callback=?";
        $res = file_get_contents($qq_online_url); //获取文件内容或获取网络请求的内容
        $reg='/online_resp\(\{"c":\d{7,10},"ec"/i';
        preg_match($reg,$res,$qq_online);
        $reg='/\d{7,10}/i';
        preg_match($reg,$qq_online[0],$qq_online);
        $this->ajaxReturn($qq_online[0]);  // 'online_resp({"c":204820685,"ec":0,"h":266433904})'

   }
   
   //发送短信验证码
   public function send_message(){
        if($_POST['check']==='send_message'){
            $shoujihao=$_POST['shoujihao'];
            vendor('taobaoali.TopSdk');//引入第三方类库
            date_default_timezone_set('Asia/Shanghai'); 
            $appkey="23740634";
            $secret="89ce8ad2d9f48c967fc9fe12cea1e120";
            $c = new \TopClient;
            $c->appkey = $appkey;
            $c->secretKey = $secret;
            $c->format='json';
            $req = new \AlibabaAliqinFcSmsNumSendRequest;
            $req->setExtend("123456");
            $req->setSmsType("normal");
            $req->setSmsFreeSignName("登录验证");
            $rand=rand(1000,9999);
            $_SESSION['send_message']="$rand";
            $req->setSmsParam("{\"code\":\"$rand\",\"product\":\"欢乐企_鹅\"}");
            $req->setRecNum($shoujihao);
            $req->setSmsTemplateCode("SMS_59970850");
            $resp = $c->execute($req);
            $data=$resp->result->success;
            $this->ajaxReturn($data);
            exit();
       }else if($_POST['check']=='yanzheng_message'){
           $yanzhengma=$_POST['yanzhengma'];
           if($yanzhengma===$_SESSION['send_message']){
                session('send_message',null); 
               //注册或者登陆
               $shoujihao=$_POST['shoujihao'];
               $this->login($shoujihao);
               $data=true;
           }else{
               $data=false;
           }
           $this->ajaxReturn($data);
           exit();
       }else{
           exit();
       }
    }
    
  
    //登陆或注册并登录
    private function login($shoujihao) {
        //先检测是否注册过
        $usersmodel=D('Users');
        $user=$usersmodel->where("phone='{$shoujihao}'")->find();
        if(!$user){
            //注册
            $row=array(
                'phone'=>$shoujihao,
                'head_url'=>'aaa'
            );
            $usersmodel->add($row);
            $user=$usersmodel->where("phone='{$shoujihao}'")->find();
        }
        //登陆
            $_SESSION['huiyuan']=array(
                'user_id'=>$user['user_id'],
                'open_id'=>$user['open_id'],
                'head_url'=>$user['head_url'],
                'phone'=>$user['phone']
            );
            
        
    }
    
    
    

    
}


