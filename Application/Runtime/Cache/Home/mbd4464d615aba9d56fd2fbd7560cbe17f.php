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


 

	<title><?php echo ($title); ?></title>
	<link rel="stylesheet" href="/Public/Home/Mobile/Css/index.css" type="text/css">
        <link rel="stylesheet" href="/Public/Home/Mobile/Css/ionic.css" type="text/css">
        <link rel="stylesheet" href="/Public/Home/Mobile/Css/all-min.css" type="text/css">
    </head>
	<body ng-app="myApp" class="light-bg grade-a platform-browser platform-ios platform-ios9 platform-ios9_1 platform-ready">
		<ion-nav-view class="view-container" nav-view-transition="ios" nav-view-direction="none" nav-swipe=""><ion-tabs class="tabs-light pane tabs-bottom tabs-standard" abstract="true" nav-view="active" style="opacity: 1; transform: translate3d(0%, 0px, 0px);">
                        
                        
    
    <!--<ion-nav-buttons side="left">-->
    <!--<a class="button button-clear icon ion-ios-arrow-back">返回</a>-->
    <!--</ion-nav-buttons>-->

    <!--<ion-nav-buttons side="right">-->
    <!--<a class="button button-clear" href="#/tabs/rulepage_trade">帮助</a>-->
    <!--</ion-nav-buttons>-->

    <ion-content class="scroll-content ionic-scroll  has-tabs"><div class="scroll" style="transform: translate3d(0px, 0px, 0px) scale(1);">
        <oni-tip><!-- ngIf: tipFlag --></oni-tip>
        <oni-bottom><!-- ngIf: trade_bottom_falg --></oni-bottom>
        <div class="trade_center">
            <div class="trade_header_box">
                <div class="trade_header" style="height: 177.3px;">
                    <div class="trade_h_top">
                        <!--<div class="trade_h_top_l">你好，{{phoneNum}}</div>-->
                        <div class="trade_h_top_l ng-binding"><?php echo ($user['phone']?'您好，':''); echo ($user['phone']?$user['phone']:'请绑定账号'); ?></div>
                        <div class="trade_h_top_r">红包余额 <span class="moneyPack_int ng-binding"><?php echo ($user['red_pack']?$user['red_pack']:'0'); ?></span><span class="moneyPack_float ng-binding">.00</span></div>
                    </div>
                    <div class="trade_h_centent">
                        <div>现金余额(元)</div>
                        <div class="trade_Rmb ng-binding"><?php echo ($user['balance']?$user['balance']:'0'); ?><span class="trade_Rmb_float ng-binding">.00</span>
                        </div>
                    </div>
                    <div class="trade_h_bottom">
						<div class="trade_h_bottom_btn" ng-click="jumpMoney(1)">
							<span class="trade_h_bottom_btn_color">充值</span>
						</div>
                        <div class="trade_h_bottom_withdraw" ng-click="jumpMoney(2)">提现秒到账</div>
                    </div>
                </div>
            </div>


            <div class="birds">
                <a class="analogTrade" ng-click="analogTrade('guess')" href="<?php echo U('index/shi_wan');?>">
                    <div class="analogTradeL">
                        <img src="/Public/Home/Mobile/Images/index/icon-simulator.png" alt="">
                    </div>
                    <div class="analogTradeR">
                        <div class="analogTradeR_first">模拟体验</div>
                        <div class="analogTradeR_second">免费试玩</div>
                    </div>
                </a>
                <!--<div class="analogTrade" ng-click="analogTrade('2')">-->
                    <!--<div class="analogTradeL">-->
                        <!--<img src="images/icon2.png" alt="">-->
                    <!--</div>-->
                    <!--<div class="analogTradeR">-->
                        <!--<div class="analogTradeR_first">排行榜</div>-->
                        <!--<div class="analogTradeR_second">每小时更新</div>-->
                    <!--</div>-->
                <!--</div>-->
                <a class="moneyGift"  href="<?php echo U('index/red_pack');?>" >
                    <div class="moneyGiftL">
                        <img src="/Public/Home/Mobile/Images/index/icon4.png" alt="">
                    </div>
                    <div class="moneyGiftR">
                        <div class="moneyGiftR_active">红包活动</div>
                        <div class="moneyGiftR_giftNum">可领&nbsp;&nbsp;<span class="moneyGiftR_Num ng-binding">1</span>&nbsp;个
                        </div>
                    </div>
                </a>
            </div>


            <div class="birds margin_top_10">
                <a class="analogTrade" href="<?php echo U('Game/pai_hang_bang');?>">
                    <div class="analogTradeL">
                        <img src="/Public/Home/Mobile/Images/index/icon2.png" alt="">
                    </div>
                    <div class="analogTradeR">
                        <div class="analogTradeR_first">排行榜</div>
                        <div class="analogTradeR_second">每小时更新</div>
                    </div>
                </a>

                <a class="moneyGift" href="<?php echo U('Game/help');?>">
                    <div class="moneyGiftL" >
                        <img src="/Public/Home/Mobile/Images/index/rookie_guide.png" alt="">
                    </div>
                    <div class="moneyGiftR">
                        <div class="moneyGiftR_active">新手教程</div>
                        <div class="moneyGiftR_giftNum">一分钟上手</div>
                    </div>
                </a><!-- end ngIf: !agentShowFlag -->
                <!-- ngIf: agentShowFlag -->

                <!--没有代理赚钱时，使用这个div撑起内容-->
                <!--<div style="flex: 1;height: 100%;margin-left: 10px;" ng-if="!agentShowFlag"></div>-->
            </div>




            <div class="center_content_t_box">
                <div class="center_content_title">马上竞猜</div>
                <div class="center_content_scroll">
                    <marquee behavior="scroll" class="ng-binding"></marquee>
                </div>
            </div>
            <div id="writehtml">
                <!-- ngRepeat: list in tradelist --><a class="trade_list_box" style="display: block;" href="" ng-repeat="list in tradelist">
                    <!-- ngIf: 'QQ_ONLINE'!=list.id -->
                </a><!-- end ngRepeat: list in tradelist -->
                <!-- ngRepeat: list in tradelist --><a class="trade_list_box" style="display:block" href="#" >
                    <!-- ngIf: '20'==list.type --><div class="lineBox" >
                        
                        <div class="trade_list_box_item">
                            <div class="trade2_img"></div>
                            <div class="trade_list_box_item_img">
                                <img src="/Public/Home/Mobile/Images/index/coin.png" ng-src="/images/coin.png">
                            </div>
                            <div class="list_left">
                                <div class="list_left_first">
                                    <!-- ngIf: !list.exturl --><span style="position: relative;"  class="ng-binding">欢乐企鹅</span><!-- end ngIf: !list.exturl -->
                                </div>
                                <p class="list_left_second" id="QQ_ONLINExs">每分钟开奖</p>
                                <!--<p class="list_left_second" id="{{list.id}}xs">&nbsp;</p>-->
                            </div>
                            <!--显示开始游戏按钮-->
                            <img src="/Public/Home/Mobile/Images/index/qq_line_btn start.png" style="position: absolute;top: 50%;right:10px;margin-top: -19px;width: 112px;height: 38px">
                        </div>
                        <p class="trade_list_box_txt">
                            竞猜QQ在线人数后3位。数据来自腾讯音视频主页右上角"当前在线人数"。
                        </p>
                    </div><!-- end ngIf: '20'==list.type -->
                </a><!-- end ngRepeat: list in tradelist -->
            </div>

        </div>

    </div><div class="scroll-bar scroll-bar-v"><div class="scroll-bar-indicator scroll-bar-fade-out" style="transform: translate3d(0px, 0px, 0px) scaleY(1); height: 687px;"></div></div></ion-content>

</ion-view></ion-nav-view></ion-tabs></ion-nav-view>
		<oni-login><div ng-switch="loginFlag" style="width: 100%;position: absolute;top: 0;bottom: 0;">
    <!-- ngSwitchWhen: login -->
    <!-- ngSwitchWhen: register -->
    <!-- ngSwitchWhen: newPass -->
</div></oni-login>
	

<section class="big-shade-all" style="display:none"></section>
<section class="login_content" style="padding-bottom: 30px;display:none">
            <div class="close_login_btn" ></div>
            <div class="login_logo">
                <h3>用户登录</h3>
            </div>
            <div class="login_body">
                <div class="login_phone_input">
                    <input type="number" id="mePhoneNum" ng-model="input.phone" style="display: block;float: left;clear: right;font-size: 2.5rem;border: none;padding: 0;margin: 0;" onfocus="if(placeholder=='请输入您的手机号') {placeholder=''}" onblur="if (value==''&amp;&amp;placeholder=='') {placeholder='请输入您的手机号'}" placeholder="请输入您的手机号" required="" class="ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required">
                </div>
                <div class="changgePhoneNum_header_second login_phone_input">
                    <div id="inputbox">
                        <input type="number" id="yzhm" ng-model="input.QRcode" style="display: block;float: left;clear: right;font-size: 2.5rem;border: none;padding: 0;margin: 0;" onfocus="if(placeholder=='请输入验证码') {placeholder=''}" onblur="if (value==''&amp;&amp;placeholder=='') {placeholder='请输入验证码'}" placeholder="请输入验证码" required="" class="ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required">
                    </div>
                    <div id="yzm"  class="ng-binding changgePhoneNum_identify">获取验证码</div>
                </div>
                <div class="lang" style="padding:0">
                    <div class="lang_btn lang_btn_bg_color_red lang_btn_color_white" id="login">
                        登录
                    </div>
                </div>
            </div>
</section>

<script>
    var login="<?php echo ($login); ?>";
    var ref_url;
</script>
<script async="" charset="UTF-8" src="/Public/Home/Mobile/Js/index.js"></script>
<script async="" charset="UTF-8" src="/Public/Home/Mobile/Js/login.js"></script>

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