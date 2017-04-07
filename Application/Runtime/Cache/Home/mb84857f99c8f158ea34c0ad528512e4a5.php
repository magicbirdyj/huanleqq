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
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo ($keywords); ?>" />
<meta name="description" content="<?php echo ($description); ?>" />
<link rel="stylesheet" type="text/css" href="/Public/Home/Mobile/Css/public.css">
<link rel="stylesheet" type="text/css" href="/Public/Home/Mobile/Css/iconfont/iconfont.css">

<script src="/Public/Common/Js/jquery-2.1.4.js"></script> 
<script src="/Public/Common/Js/jquery-weui.min.js"></script> 
<script src="/Public/Common/Js/iscroll.js"></script> 
<script src="/Public/Common/Js/function.js"></script>
<script src="/Public/Common/Js/swiper.min.js"></script>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<title><?php echo ($title); ?></title>


 
<link rel="stylesheet" type="text/css" href="/Public/Home/Mobile/Css/member.css">
<link rel="stylesheet" type="text/css" href="/Public/Home/Mobile/Css/hunliren_shangjiaxinxi.css">
<link rel="stylesheet" type="text/css" href="/Public/Home/Mobile/Css/address.css">
</head>

<body>
    <div class="fanhui padding"><a href="<?php echo U($ref);?>"><span class="iconfont tb_fanhui"id="shangjia_info_fanhui">&#xe603;</span></a>收货地址</div>
    <div class="right">
        <ul class='address_ul'>
            <?php if(is_array($arr_address)): $i = 0; $__LIST__ = $arr_address;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li id='<?php echo ($key); ?>'>
                    <div class="shezhi_zhengyong" id='<?php echo ($key); ?>'>
                        <div class="address_left">
                    <div class="address_info"><span id='name'><?php echo ($vo['name']); ?></span>， <span id='tel'><?php echo ($vo['mobile']); ?></span></div>
                    <div class="address_info border-bottom"><span id='location'><?php echo ($vo['location']); ?></span> <span id='address'><?php echo ($vo['address']); ?></span></div>
                        </div>
                        <div class="address_right">使用</div>
                    </div>
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
        <div id='tishi1' class='fixed_tishi'></div>
        <input name='eq' type='hidden'/>
    </div>
</form>
    <div id='tishi2' class='fixed_tishi'></div>
<script>
    //获取共享地址
            $(function(){
                $('#address_weixin').bind('click',function(){
                    if($('.address_ul>li').length>=6){
                        tishi('tishi2','最多添加6个收货地址','200px');
                    }else{
                        calladd();
                    }
                }); 
            });
            var jsApiParameters=<?php echo ($signPackage); ?> ;
            
            //获取共享地址
            var open_id="<?php echo ($open_id); ?>";
            //默认的地址eq
            var default_eq="<?php echo ($default_address); ?>";
           
	</script>
<script src="/Public/Home/Mobile/Js/xuanze_address_manage.js" type="text/javascript"></script>
</body> 
</html>
<footer class="foot-h footnav">
	<nav>
            <a href="<?php echo U('index/index');?>">
        	<i class="iconfont">&#xe60f;</i>
            <p>首页</p>
        </a>
        <a href="<?php echo U('Member/money_pack');?>">
        	<i class="iconfont">&#xe625;</i>
            <p>钱包</p>
        </a>
        <a href="<?php echo U('Member/index');?>">
        	<i class="iconfont">&#xe60a;</i>
            <p>我的</p>
        </a>
    </nav>
</footer>
<script async="" charset="UTF-8" src="/Public/Home/Mobile/Js/foot.js"></script>



</body>
</html>