<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//tp验证码加密函数
   function authcode($str){
        $key = substr(md5('ThinkPHP.CN'), 5, 8);
        $str = substr(md5($str), 8, 10);
        return md5($key . $str);
    }


//比对验证码是否正确
function check_verify($code){ 
    if(NOW_TIME - $_SESSION['d2d977c58444271d9c780187e93f80e5']['verify_time'] > 30){
        unset($_SESSION['d2d977c58444271d9c780187e93f80e5']);//清空session
        return -1;//验证码过期
    }elseif(authcode(strtoupper($code))!=$_SESSION['d2d977c58444271d9c780187e93f80e5']['verify_code']){
        return 0;//验证码错误
    }else {
        return 1;//验证码正确
    }
}

//判断是否只含有数字 正确返回true 否则 返回false
function is_shuzi($str){
    $reg = '/^\d+$/i';
    $result=preg_match($reg,$str);
    if($result==0){
        return false;
    }else{
        return true;
    }
}

//验证手机号，如果是，返回true,否则返回false
function is_shoujihao($str){
    $reg='/^1[3458]\d{9}$/i';
    $result=preg_match($reg,$str);
    if($result==0) {
        return false;
    }else{
        return true;
    }
}

//验证邮箱，如果是返回true,否则返回false
function is_youxiang($str){
    $reg='/^w+[.\w]@(\w+.)+\w{2,4}$/i';
    $result=preg_match($reg,$str);
    if($result==0) {
        return false;
    }else{
        return true;
    }
}


//验证IP是否有效，如果是返回true,否则返回false
function is_ip($str){
    $reg='/^([1-9]|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])(\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])){3}$/i';
    $result=preg_match($reg,$str);
    if($result==0) {
        return false;
    }else{
        return true;
    }
}


//验证是否含有非法字符，含有非法返回true，否则返回false
function is_feifa($str){
    //$reg='/[=!;:#%&\\\/\^\$\(\)\[\]\{\}\*\+\?\-\"\']+/i';
    $reg='/[=;:#&\/\^\$\[\]\{\}\*\+\?\"\']+/i';
    $result=preg_match($reg,$str);
    if($result!==0) {
        return true;
    }else{
        return false;
    }
}
//验证是否价格
function is_price($str){
    $reg='/^\d+\.?\d{0,2}$/i';
    $result=preg_match($reg,$str);
    if($result!==0) {
        return true;
    }else{
        return false;
    }
}


function replace_a($str){
    $reg='/(href="http:\/\/www\.)([^1][^7][^e][^a][^c][^h]\w*|\w{1,5})(\.\w+)/is';
    $result= preg_replace($reg,"$1*****$3", $str);
    return $result;
 
}

//得到微秒数
function gettime(){
    $time=explode(' ',  microtime());
    $mtime=  substr($time[0], strpos($time[0],'.')+1,6);
    return $time[1].$mtime;
}

//得到上传文件的重命名
function getname(){
    //$extension=  substr($filename, strpos($filename, '.'));
    $name=gettime();
    return $name.mt_rand(1000,9999);
}

//判断文件是否是合法图片
/*
function is_image(){
    $key=  key($_FILES);
    $file=$_FILES[$key]['tmp_name'];
    $filename=$_FILES[$key]['name'];
    $extension=strtolower(substr($filename, strpos($filename, '.')+1));
    $array=array('jpg', 'jpeg', 'gif', 'png', 'swf', 'bmp');
    if(in_array($extension, $array,true)&&@getimagesize($file)){
        return true;
    }else{
        return false;
    }
}
*/



//生成随机字符串
function create_char($length=0){
    $rand='';
    for($i=0;$i<$length;$i++){
        $rand .= chr(mt_rand(33,126));
    }
    return $rand;
}

//得到editor编辑框内的图片文件名（包括地址）
function get_file($str){
    $reg='/<img.*?src="\/([^"]+)"[^>]*>/i';
    preg_match_all($reg,$str,$result);
    return $result;
}

//创建当前日期的文件夹
function creat_file_date($dir){
    $today=date('Ymd',time());
    if(!file_exists($dir.$today)){
        mkdir($dir.$today);
    }
    return $dir.$today;
}

//创建文件夹,创建前先检查是否存在
function creat_file($dir){
    if(!file_exists($dir)){
        mkdir($dir);
    }
}













    

    
    
    
    
 

/**
 * 判断$arr中元素字符串是否有出现在$string中
 * @param  $string     $_SERVER['HTTP_USER_AGENT'] 
 * @param  $arr          各中浏览器$_SERVER['HTTP_USER_AGENT']中必定会包含的字符串
 * @param  $returnvalue 返回浏览器名称还是返回布尔值，true为返回浏览器名称，false为返回布尔值【默认】
 * @author           discuz3x
 * @lastmodify    2014-04-09
 */
function dstrpos($string, $arr, $returnvalue = false) {
 if(empty($string)) return false;
 foreach((array)$arr as $v) {
  if(strpos($string, $v) !== false) {
   $return = $returnvalue ? $v : true;
   return $return;
  }
 }
 return false;
}





//检查是否微信浏览器
  function is_weixin() {
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') !== false) {
        return true;
    }
    return false;
}






//延时函数
function delayed($s) {
    $time=  time();
    $url=U('Index/index');
        header("Location:".$url);
    $time1=time();
    while($time+5>time()){
        $time1=time();
    }
    //var_dump($time1);
}





//根据QQ在线人数返回最后三位结果  数组
function get_result($qq_online){
    $result=$qq_online;
    $arr_result[]=((int)($result/100))%10;
    $arr_result[]=((int)($result/10))%10;
    $arr_result[]=((int)$result)%10;
    return $arr_result;
}