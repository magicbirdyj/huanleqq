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


 
<link rel="stylesheet" type="text/css" href="/Public/Home/Mobile/Css/member.css">
<link rel="stylesheet" type="text/css" href="/Public/Home/Mobile/Css/hunliren_shangjiaxinxi.css">
<link rel="stylesheet" type="text/css" href="/Public/Home/Mobile/Css/address.css">
</head>

<body>
    <div class="fanhui padding"><a href="<?php echo U('Member/index');?>"><span class="iconfont tb_fanhui"id="shangjia_info_fanhui">&#xe603;</span></a>收货地址</div>
    <div class="right">
        <ul class='address_ul'>
            <?php if(is_array($arr_address)): $i = 0; $__LIST__ = $arr_address;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li id='<?php echo ($key); ?>'>
                    <div class="address_info"><span id='name'><?php echo ($vo['name']); ?></span>， <span id='tel'><?php echo ($vo['mobile']); ?></span></div>
                    <div class="address_info border-bottom"><span id='location'><?php echo ($vo['location']); ?></span> <span id='address'><?php echo ($vo['address']); ?></span></div>
                    <div class="edit_line">
                        <div class="edit_left" id='<?php echo ($key); ?>'><div class="iconfont tb_moren">&#xe635;</div><div class="moren_text">设为默认</div></div>
                        <div class="edit_right">
                            <div class="bianji"><div class="iconfont tb_bianji">&#xe638;</div>编辑</div>
                            <div class='delete'><div class="iconfont tb_shanchu">&#xe637;</div>删除</div>    
                        </div>
                    </div>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <a href="javascript:void(0)" class="button_a_lvse" id='address_shoudong'>手动添加</a>
        <a href="javascript:void(0)" class="button_a_lvse" id='address_weixin'>微信添加</a>

    </div>
    <div id="overlay"></div><!--遮罩层div-->
    <form name='address_form'>
    <div id="edit_address_div">
        <div class='edit_title'>编辑地址</div>
        <div>
            <input name='name' placeholder="名字" value="" type='text' class="user_info" style="border-right: 1px solid #AAA;" />
            <input name='tel' placeholder="电话" value="" type='text' class="user_info" />
        </div>
        <div>
            <select name='address_province'></select>
            <select name='address_city'></select>
            <select name='address_county'></select>
        </div>
        <div><input name='address' placeholder="请填写详细街道地址" value="" type='text' class='location' /></div>
        <div class='edit_title'><a href="javascript:void(0)" class="button_a_lvse" id='save_button'>保存</a></div>
        <div id='fixed_tishi'></div>
        <input name='eq' type='hidden'/>
    </div>
</form>
<script>
    //获取共享地址
            $(function(){
                $('#address_weixin').bind('click',function(){
                    calladd();
                }); 
            });
            var jsApiParameters=<?php echo ($signPackage); ?> ;
            
            //获取共享地址
            var open_id="<?php echo ($open_id); ?>";
            //默认的地址eq
            default_eq="<?php echo ($default_address); ?>";
	</script>
<script src="/Public/Home/Mobile/Js/address_manage.js" type="text/javascript"></script>
</body> 
</html>
  <div class="footer">
      <div class="ui-footer">
                  <a href="<?php echo U('Index/index');?>"><span class=" iconfont foot_home foot_tb">&#xe60f;</span><span>首页</span></a>
                  <a href="<?php echo U('Member/sellection');?>"><span class=" iconfont foot_shoucang foot_tb">&#xe620;</span><span>我的收藏</span></a>
                  <a href="<?php echo U('Order/index');?>"><span class="iconfont foot_pintuan foot_tb">&#xe622;</span><span>我的拼团</span></a>
                  <a href="<?php echo U('Member/index');?>"><span class=" iconfont foot_wode foot_tb">&#xe60a;</span><span>我的酱紫</span></a>
          </div>
  </div> 



<script>
    var img="/Public/Home/Mobile/Images/public/jzpp_logo.jpg";
    var title="酱紫拼拼";
    var desc="风靡全国的拼团商城，优质实惠的商品，免费快递送货上门，快来一起拼团吧";
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
</body>
</html>