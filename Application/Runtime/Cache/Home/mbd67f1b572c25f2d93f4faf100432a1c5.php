<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
<meta name="screen-orientation" content="portrait" /> <!-- uc强制竖屏 -->
<meta name="x5-orientation" content="portrait" />  <!-- QQ强制竖屏 -->
<!--<meta name="full-screen" content="yes" /> <!-- UC强制全屏 -->
<meta name="x5-fullscreen" content="true" /> <!-- QQ强制全屏 -->
<!--<meta name="browsermode" content="application" /> <!-- UC应用模式 -->
<meta name="x5-page-mode" content="app" /> <!-- QQ应用模式 -->
<meta name="viewport"  content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"  /> 
<meta property="wb:webmaster" content="2e7567efc888fc1e" /> <!--新浪微博分享必须-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo ($keywords); ?>" />
<meta name="description" content="<?php echo ($description); ?>" />

<link rel="shortcut icon" href="/favicon.ico"/>
<link rel="bookmark" href="/favicon.ico"/>
<link rel="stylesheet" type="text/css" href="/Public/Home/Mobile/Css/public.css"/>
<link rel="stylesheet" type="text/css" href="/Public/Home/Mobile/Css/head.css"/>
<link rel="stylesheet" type="text/css" href="/Public/Home/Mobile/Css/footer.css">
<link rel="stylesheet" type="text/css" href="/Public/Home/Mobile/Css/iconfont/iconfont_guopin/iconfont.css">

<script src="/Public/Common/Js/jquery.min.js"></script> 
<script src="/Public/Common/Js/function.js"></script>
<script src="/Public/Home/Mobile/Js/UC_jinzhisuofang.js"></script>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>

<title><?php echo ($title); ?></title>


 
<link rel="stylesheet" type="text/css" href="/Public/Home/Mobile/Css/public.css"/>
<link rel="stylesheet" type="text/css" href="/Public/Home/Mobile/Css/login.css">
<link rel="stylesheet" type="text/css" href="/Public/Home/Mobile/Css/iconfont/iconfont_iphone/iconfont.css">
<link rel="stylesheet" type="text/css" href="/Public/Home/Mobile/Css/iconfont/iconfont_public/iconfont.css">
</head>

<body>
<div class="fanhui padding"><a href="javascript:history.back()"><span class="iconfont tb_fanhui"id="shangjia_info_fanhui">&#xe604;</span></a>17登陆</div>
<span id="infor_login"></span>
<form name="zhuce"  method="post" action="<?php echo U('Login/chenggong');?>" id="form1" >
        <input type="hidden" name="hidden" value="<?php echo ($time); ?>" />
        <input type="hidden" name="leixing" value="login" />

<div class="zhuce1_tr">
        <i class="icon icon-user"></i>
<input type="text" name="shoujihao" class="zhuce1_tr_td2" placeholder="手机号" />
</div><!--第一行-->

<div class="zhuce1_tr">
    <i class="icon icon-password"></i>
<input type="password" name="mima" class="zhuce1_tr_td2" placeholder="密码" id="password"/>
</div><!--第二行-->
<a href="javascript:void(0)" id="zhuce1_xiayibu" class="a_xyb" onClick="return login(this)" style="float: left;" >登录</a>
</form>
<a href="<?php echo U('Zhuce/index');?>" id="zhuce">免费注册</a>

<script src="/Public/Home/Mobile/Js/denglu.js" type="text/javascript"></script>



  <div class="footer">
      <div class="ui-footer">
                  <a href="<?php echo U('Index/index');?>"><span class=" iconfont foot_home foot_tb">&#xe60f;</span><span>首页</span></a>
                  <a href="<?php echo U('Member/sellection');?>"><span class=" iconfont foot_shoucang foot_tb">&#xe620;</span><span>我的收藏</span></a>
                  <a href="<?php echo U('Order/index');?>"><span class="iconfont foot_pintuan foot_tb">&#xe622;</span><span>我的拼团</span></a>
                  <a href="<?php echo U('Member/index');?>"><span class=" iconfont foot_wode foot_tb">&#xe60a;</span><span>我的酱紫</span></a>
          </div>
  </div> 


<div id="overlay"></div><!--遮罩层div-->
<div id="guanzhu">
    <div class="gz_title">酱紫拼拼，拼实惠，拼乐趣</div>
    <div class="guanzhu_content">
        <div class="gz_content_text text_xiao">关注酱紫拼拼，以便购买后接受拼团和物流通知</div>
        <div class="gz_content_text"><div class="red">请长按下面指纹</div><div>，识别二维码</div></div>
    </div>
    <div class="guanzhu_erweima">
        <div class="iconfont tb_zhiwen">&#xe636;</div>
        <div class="erweima_div"><img src="/Public/Home/Mobile/Images/public/jzpp_erweima.png" /></div>
    </div>
</div>
<script>
    var guanzhu="<?php echo ($guanzhu); ?>";
</script>
<script src="/Public/Home/Mobile/Js/public.js" type="text/javascript"></script>

</body>
</html>