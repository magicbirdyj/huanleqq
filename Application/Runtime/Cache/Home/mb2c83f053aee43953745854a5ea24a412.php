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
<link rel="stylesheet" type="text/css" href="/Public/Home/Mobile/Css/zhuce.css">
</head>

<body>
    <div class="fanhui padding"><a href="<?php echo U('Member/index');?>"><span class="iconfont tb_fanhui"id="shangjia_info_fanhui">&#xe603;</span></a>填写账户信息</div>
     <div id="infor" class="infor"></div>
    <form name="zhuce"  method="post" action="<?php echo U('zhuceshop/zhuce3');?>">
        <input type="hidden" name="hidden" value="<?php echo ($time2); ?>" />
<div class="zhuce1_tr">
<div class="zhuce1_tr_td2" id="dlm_sjh"><?php echo ($dlm); ?></div>
<input class="butttom_sjyz" id="butttom_sjyz" type="button" name="btn_sjyz" value="点击免费获取短信动态码" />
</div><!--第一行-->

<div class="zhuce1_tr">
<i class="iconfont icon">&#xe63f;</i>
<input type="text" name="shoujiyanzheng" class="zhuce1_tr_td2" placeholder="短信动态码"/>

</div><!--第二行-->

<div class="zhuce1_tr">
<i class="iconfont icon">&#xe63a;</i>
<input type="text" name="huiyuanming" class="zhuce1_tr_td2" placeholder="店铺名"/>

</div><!--第二行-->
<div class="zhuce1_tr">
 <i class="iconfont icon">&#xe63d;</i>   
<input type="password" name="shezhimima" class="zhuce1_tr_td2" placeholder="设置密码"/>

</div><!--第三行-->
<div class="mimaxiaoguo" id="mimaxiaoguo">
<div class="mimaxiaoguo_fenlei">弱</div>
<div class="mimaxiaoguo_fenlei">中</div>
<div class="mimaxiaoguo_fenlei" id="mimaxiaoguo_last">强</div>
</div><!--密码效果-->

<div class="zhuce1_tr">
<i class="iconfont icon">&#xe63d;</i>
<input type="password" name="querenmima" class="zhuce1_tr_td2 zhuce1_tr_teshu" placeholder="确认密码" style="border-top: 1px solid #F0F0F0;border-bottom: 1px solid #F0F0F0;"/>

</div><!--第四行-->
<a href="javascript:void(0)" id="zhuce1_xiayibu" class="button_a_lvse" >下一步</a>


</form>
    
    
    
    
    
    
    
    
    
    
    
 

<script src="/Public/Home/Mobile/Js/zhuce2.js" type="text/javascript"></script>




  <div class="footer">
      <div class="ui-footer">
                  <a href="<?php echo U('Index/index');?>"><span class=" iconfont foot_home foot_tb">&#xe60f;</span><span>首页</span></a>
                  <a href="<?php echo U('Member/sellection');?>"><span class=" iconfont foot_shoucang foot_tb">&#xe620;</span><span>我的收藏</span></a>
                  <a href="<?php echo U('Order/index');?>"><span class="iconfont foot_pintuan foot_tb">&#xe622;</span><span>我的拼团</span></a>
                  <a href="<?php echo U('Member/index');?>"><span class=" iconfont foot_wode foot_tb">&#xe60a;</span><span>会员中心</span></a>
          </div>
  </div> 



<script>
    var img="/Public/Home/Mobile/Images/public/jzpp_logo.jpg";
    var title="酱紫拼拼";
    var desc="搜尽娄底的美食美味，比美团更多的优惠，免费快递送货上门，快来一起拼团吧";
    var link='m.jiangzipinpin.com';
    wx.config({  
        //debug: true, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
        appId: "<?php echo ($wx_config['appId']); ?>", // 必填，公众号的唯一标识
        timestamp: "<?php echo ($wx_config['timestamp']); ?>", // 必填，生成签名的时间戳
        nonceStr: "<?php echo ($wx_config['nonceStr']); ?>", // 必填，生成签名的随机串
        signature: "<?php echo ($wx_config['signature']); ?>",// 必填，签名，见附录1
        jsApiList: ['onMenuShareTimeline','onMenuShareAppMessage','onMenuShareQQ','onMenuShareQZone'] // 必填，需要使用的JS接口列表，所有JS接口列表见附录2
    });
    wx.ready(function () {
        wx.onMenuShareTimeline({
            title:  title, // 分享标题
            link: link, // 分享链接
            imgUrl: 'http://m.jiangzipinpin.com'+img // 分享图标
        });
        wx.onMenuShareAppMessage({
            title:  title, // 分享标题
            link: link, // 分享链接
            desc:  desc, // 分享描述
            imgUrl: 'http://m.jiangzipinpin.com'+img // 分享图标
        });
        wx.onMenuShareQQ({
            title:  title, // 分享标题
            link: link, // 分享链接
            desc: desc, // 分享描述
            imgUrl: 'http://m.jiangzipinpin.com'+img // 分享图标
        });
        wx.onMenuShareQZone({
            title: title, // 分享标题
            link: link, // 分享链接
            desc:desc, // 分享描述
            imgUrl:  'http://m.jiangzipinpin.com'+img // 分享图标
        });
    });
    
    

</script>
<?php require_once 'cs.php';echo '<img src="'._cnzzTrackPageView(1260248716).'" width="0" height="0"/>';?>
</body>
</html>