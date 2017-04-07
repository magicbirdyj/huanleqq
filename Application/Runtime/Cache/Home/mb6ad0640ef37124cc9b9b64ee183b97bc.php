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
</head>

<body>
    <div id='wode17'>
    <div class="fanhui padding"><a href="<?php echo U('index/index');?>"><span class="iconfont tb_fanhui"id="shangjia_info_fanhui">&#xe603;</span></a>我的酱紫</div>
    <div class="right_head" id='wode17_head'>
            <div class="hlr_touxiang">
                <img src="<?php echo ($touxiang_url); ?>" class="img" />
                <img src='/Public/Home/Images/public/circle_f6f6f6.png' class="img_circle" />
            </div>
        <div class="hlr_name">
            <div><?php echo ($userdata['user_name']); ?></div>
            <div><?php echo ($day_time); ?></div>    
        </div>
        <div class="jiantou_r"><span class="iconfont tb_jiantou_r">&#xe604;</span></div>
    </div>
    <div class="dingdan">
        <a href="<?php echo U('Order/index');?>" class='dingdan_1'>
            <div class="dingdan_tb_div"><span class="iconfont tb_dingdan">&#xe625;</span></div>
            <div style="float: left;margin-left: 20px;line-height: 30px;font-size: 14px;">全部订单：</div>
            <div class="jiantou_r_xiao"><span><?php echo ($status_count['all']); ?></span><span class="iconfont tb_jiantou_r_xiao">&#xe604;</span></div>
        </a>
        <div class='dingdan_2'>
            <ul>
                <li>
                    <a href="<?php echo U('Order/index?status=no_pay');?>">
                    <div class='dingdan_fenkai_tb_div'>
                        <span class="iconfont tb_dingdan_li" style='font-size: 28px;'>&#xe628;</span>
                        <span style='margin-left: 2px;' class="right_up_tb"><?php echo ($status_count['no_pay']); ?></span>
                    </div>
                    <div><span>待付款</span></div>
                    </a>
                </li>
                <li>
                    <a href="<?php echo U('Order/index?status=daifahuo');?>">
                    <div class='dingdan_fenkai_tb_div'>
                        <span class="iconfont tb_dingdan_li" style='font-size: 28px;'>&#xe62a;</span>
                        <span style='margin-left: 2px;' class="right_up_tb"><?php echo ($status_count['daifahuo']); ?></span>
                    </div>
                    <div><span>待发货</span></div>
                    </a>
                </li>
                <li>
                    <a href="<?php echo U('Order/index?status=daishouhuo');?>">
                    <div class='dingdan_fenkai_tb_div'>
                        <span class="iconfont tb_dingdan_li">&#xe627;</span>
                        <span style='margin-left: 2px;' class="right_up_tb"><?php echo ($status_count['daishouhuo']); ?></span>
                    </div>
                    <div><span>待收货</span></div>
                    </a>
                </li>
                <li>
                    <a href="<?php echo U('Order/index?status=daipingjia');?>">
                    <div class='dingdan_fenkai_tb_div'>
                        <span class="iconfont tb_dingdan_li">&#xe629;</span>
                        <span style='margin-left: 2px;' class="right_up_tb"><?php echo ($status_count['daipingjia']); ?></span>
                    </div>
                    <div><span>待评价</span></div>
                    </a>
                </li>
                <li>
                    <a href="<?php echo U('Order/index?status=shouhou');?>">
                    <div class='dingdan_fenkai_tb_div'>
                        <span class="iconfont tb_dingdan_li">&#xe622;</span>
                        <span style='margin-left: 2px;' class="right_up_tb"><?php echo ($status_count['shouhou']); ?></span>
                    </div>
                    <div><span>售后</span></div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    
    
    
    </div>
    
    
    <div id='wodezhanghu' style='display: none;position: absolute;'>
        <div class="fanhui padding"><a href="javascript:void(0)"><span class="iconfont tb_fanhui" id="wodezhanghu_fanhui">&#xe603;</span></a>我的账户</div>
        <ul class="wodezhanghu_ul">
            <li>
                <a href="<?php echo U('Ajaxnologin/address_tiaozhuan');?>">
                    <span class="iconfont tb_wodezhanghu">&#xe621;</span>
                    <span style="margin-left: 10px;"><?php echo ($userdata['user_name']); ?></span>
                    <span style="float: right"><span style="font-size: 12px;">编辑收货地址</span><span class="iconfont tb_jiantou_r_xiao">&#xe604;</span></span>
                    
                </a>
            </li>
            <!--
            <li>
                <a href="<?php echo U('Member/qiehuanzhuanghu');?>">
                    <span class="iconfont tb_wodezhanghu">&#xe60a;</span>
                    <span style="margin-left: 10px;"><?php echo ($userdata['user_name']); ?></span>
                    <span style="float: right"><span style="font-size: 12px;">切换账户</span><span class="iconfont tb_jiantou_r_xiao">&#xe604;</span></span>
                    
                </a>
            </li>
            -->
            <li style='padding: 10px 10px;'>
                <a class="tuichu_a" href="<?php echo U('Login/quit');?>">退出登陆</a>
            </li>
        </ul>
    </div>
    
    
    
    <div style='margin-bottom: 50px;'></div>
    
    
    
    
    
    
    
<script src="/Public/Home/Mobile/Js/member.js" type="text/javascript"></script>
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