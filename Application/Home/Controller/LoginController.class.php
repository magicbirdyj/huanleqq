<?php
namespace Home\Controller;
use  Home\Controller;
class LoginController extends FontEndController {
    public function index(){
        if(is_weixin()){
            $_SESSION['dues']=$_GET['dues'];
            $a=urlencode("http://m.zsxjjd.com/Home/Login/weixin_login");
            $url="https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx91953340c19f656e&redirect_uri=".$a."&response_type=code&scope=snsapi_base&state=1#wechat_redirect";
            header("Location:{$url}");
            exit();
        }else{
            //$this->redirect('Login/login');
            echo '系统错误，请联系客服';
        }
    }

    
    
    
    public function weixin_login(){
        //获取微信用户信息并直接登陆
        if(isset($_GET['code'])){
            $code=$_GET['code'];
            $wangye=$this->get_wangye($code);
            $open_id=$wangye['openid'];
            $_SESSION['huiyuan']['open_id']=$open_id;
            var_dump($_SESSION['huiyuan']);
            //header("location:". U('Charge/zhifu'));
        }else{
            alert('错误，微信浏览器并没收到code');
        } 
       
    }
    
    
    
    //登陆或注册并登录
    public function login() {
        //测试时直接登陆
        $_SESSION['huiyuan']=array(
            'user_id'=>'107',
            'open_id'=>'',
            'head_url'=>'',
            'phone'=>'13574506835'
        );
        if(isset($_SESSION['ref'])){
                header("location:". $_SESSION['ref']);
                exit();
            }else{
                header("location:". U('index/index'));
                exit();
            }
    }
    
    
    
    
    
    
    
    
    // 删除session guanzhu   给js的ajax用
    public function delete_guanzhu() {
        session('guanzhu',null); 
    }
    
    
    
    
    
    private function get_wangye($code){
       $url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=".APPID."&secret=".APPSECRET."&code=".$code."&grant_type=authorization_code" ;
       $res = file_get_contents($url); //获取文件内容或获取网络请求的内容
       $result = json_decode($res, true);//接受一个 JSON 格式的字符串并且把它转换为 PHP 变量
       return $result;
  }
  
  private function get_userinfo($openid,$access_token){
       $url = "https://api.weixin.qq.com/cgi-bin/user/info?access_token=".$access_token."&openid=".$openid."&lang=zh_CN" ;
       $res = file_get_contents($url); //获取文件内容或获取网络请求的内容
       $result = json_decode($res, true);//接受一个 JSON 格式的字符串并且把它转换为 PHP 变量
       return $result;
  }
  

  

}


