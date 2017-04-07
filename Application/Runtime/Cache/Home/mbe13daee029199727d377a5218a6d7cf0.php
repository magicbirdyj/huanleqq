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


<style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}.ng-animate-shim{visibility:hidden;}.ng-anchor{position:absolute;}</style>
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<script src="/Public/Common/Js/requestAnimationFrame.js"></script> 
<link rel="stylesheet" href="/Public/Home/Mobile/Css/ionic.css" type="text/css">
<link rel="stylesheet" href="/Public/Home/Mobile/Css/all-min.css" type="text/css">
<style type="text/css">.tabs .tab-title{font-family:"微软雅黑" !important;}.tabs-striped .tab-item.tab-item-active, .tabs-striped .tab-item.active, .tabs-striped .tab-item.activated {margin-top: 0px;border-style: solid;border-width: 0 0 3px 0;border-color: #FF7A01; }.tabs-striped .tabs{border-bottom: 0px solid #ddd !important;}.tab-item{font-size: 17px;}.bar .title{margin: 1px 37px;}</style><style type="text/css">.tabs .tab-title{font-family:"微软雅黑" !important;}.tabs-striped .tab-item.tab-item-active, .tabs-striped .tab-item.active, .tabs-striped .tab-item.activated {margin-top: 0px;border-style: solid;border-width: 0 0 3px 0;border-color: #FF7A01; }.tabs-striped .tabs{border-bottom: 0px solid #ddd !important;}.tab-item{font-size: 17px;}.bar .title{margin: 1px 37px;}</style>
<style type="text/css">.tabs .tab-title{font-family:"微软雅黑" !important;}.tabs-striped .tab-item.tab-item-active, .tabs-striped .tab-item.active, .tabs-striped .tab-item.activated {margin-top: 0px;border-style: solid;border-width: 0 0 3px 0;border-color: #FF7A01; }.tabs-striped .tabs{border-bottom: 0px solid #ddd !important;}.tab-item{font-size: 17px;}.bar .title{margin: 1px 37px;}</style><style type="text/css" id="MEIQIA-ICON-STYLE">.MEIQIA-ICON { background-size: 40px auto !important; background-repeat: no-repeat !important; background-image: url("http://static.meiqia.com/dist/images/icon-mq.png?v=f4kg2bw8j5ze61or") !important; } @media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min--moz-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2/1), only screen and (min-device-pixel-ratio: 2) { .MEIQIA-ICON { background-image: url("http://static.meiqia.com/dist/images/icon-mq@2x.png?v=f4kg2bw8j5ze61or") !important; } } .MEIQIA-ICON-CHAT1 { background-position: 0 0 !important; } .MEIQIA-ICON-CHAT2 { background-position: 0 -20px !important; } .MEIQIA-ICON-CHAT3 { background-position: 0 -40px !important; } .MEIQIA-ICON-CHAT4 { background-position: 0 -60px !important; } .MEIQIA-ICON-CHAT5 { background-position: 0 -80px !important; } .MEIQIA-ICON-CHAT6 { background-position: 0 -100px !important; } .MEIQIA-ICON-CHAT7 { background-position: 0 -120px !important; } .MEIQIA-ICON-CHAT8 { background-position: 0 -140px !important; } .MEIQIA-ICON-CHAT9 { background-position: 0 -160px !important; } .MEIQIA-ICON-CHAT10 { background-position: 0 -180px !important; } .MEIQIA-ICON-CHAT11 { background-position: 0 -200px !important; } .MEIQIA-ICON-CHAT12 { background-position: 0 -220px !important; } .MEIQIA-ICON-TICKET1 { background-position: -20px 0 !important; } .MEIQIA-ICON-TICKET2 { background-position: -20px -20px !important; } .MEIQIA-ICON-TICKET3 { background-position: -20px -40px !important; } .MEIQIA-ICON-TICKET4 { background-position: -20px -60px !important; } .MEIQIA-ICON-TICKET5 { background-position: -20px -80px !important; } .MEIQIA-ICON-TICKET6 { background-position: -20px -100px !important; } .MEIQIA-ICON-TICKET7 { background-position: -20px -120px !important; } .MEIQIA-ICON-TICKET8 { background-position: -20px -140px !important; } .MEIQIA-ICON-TICKET9 { background-position: -20px -160px !important; } .MEIQIA-ICON-TICKET10 { background-position: -20px -180px !important; } .MEIQIA-ICON-TICKET11 { background-position: -20px -200px !important; } .MEIQIA-ICON-TICKET12 { background-position: -20px -220px !important; } </style><style type="text/css" id="MEIQIA-PANEL-STYLE"> .MEIQIA-FULL-HTML { position: static !important; width: 100% !important; height: 100% !important; } .MEIQIA-FULL-BODY { position: fixed !important; top: 0 !important; right: 0 !important; bottom: 0 !important; left: 0 !important; width: 100% !important; height: 100% !important; padding: 0 !important; margin: 0 !important; overflow: hidden !important; } #MEIQIA-PANEL-HOLDER { display: block; position: absolute; top: 0; right: 0; bottom: 0; left: 0; z-index: -1; width: 100%; height: 100%; padding: 0; margin: 0; border: 0; overflow: hidden; visibility: hidden; opacity: 1; background: transparent; } #MEIQIA-IFRAME { display: none; position: relative; float: none; width: 100% !important; height: 100% !important; padding: 0; margin: 0; border: 0; background: none; }  </style><style type="text/css" id="MEIQIA-INVITE-STYLE">#MEIQIA-INVITE, #MEIQIA-INVITE div, #MEIQIA-INVITE span { float: none; width: auto; height: auto; padding: 0; margin: 0; border: 0; background: none; } #MEIQIA-INVITE { position: fixed; z-index: 2147483647; display: none; width: 260px; height: 130px; border: 1px solid #f7f7f7; border-radius: 4px; box-shadow: 0 0 14px 0 rgba(0, 0, 0, .16); text-align: left; cursor: pointer; color: #000; line-height: 1.428571429; background-color: #fff; } #MEIQIA-INVITE #MEIQIA-INVITE-ARROW1, #MEIQIA-INVITE-ARROW2 { position: absolute; font-size: 0; line-height: 0; } #MEIQIA-INVITE #MEIQIA-INVITE-ARROW1 { z-index: 2; } #MEIQIA-INVITE #MEIQIA-INVITE-ARROW2 { z-index: 1; }  #MEIQIA-INVITE { right: 6%; bottom: 0; left: 6%; width: 88%; margin-bottom: 74px; } #MEIQIA-INVITE #MEIQIA-INVITE-ARROW1 { right: 12px; bottom: -8px; border-top: 8px solid #fff; border-right: 7px solid transparent; border-left: 7px solid transparent; } #MEIQIA-INVITE #MEIQIA-INVITE-ARROW2 { right: 11px; bottom: -10px; border-top: 9px solid #f7f7f7; border-right: 8px solid transparent; border-left: 8px solid transparent; }       #MEIQIA-INVITE #MEIQIA-INVITE-CLOSE { position: absolute; right: -20px; top: -20px; width: 40px; height: 40px;  background-position: 0 -260px;  } #MEIQIA-INVITE #MEIQIA-INVITE-CLOSE:active {  background-position: 0 -300px;  } #MEIQIA-INVITE #MEIQIA-INVITE-INSIDE { width: 88%; height: 44px; margin: 46px 6% 0; text-align: left; font-size: 14px; line-height: 22px; overflow: hidden; color: #000; /*word-break: break-all;*/ } </style><style type="text/css">.tabs .tab-title{font-family:"微软雅黑" !important;}.tabs-striped .tab-item.tab-item-active, .tabs-striped .tab-item.active, .tabs-striped .tab-item.activated {margin-top: 0px;border-style: solid;border-width: 0 0 3px 0;border-color: #FF7A01; }.tabs-striped .tabs{border-bottom: 0px solid #ddd !important;}.tab-item{font-size: 17px;}.bar .title{margin: 1px 37px;}</style><style type="text/css">.tabs .tab-title{font-family:"微软雅黑" !important;}.tabs-striped .tab-item.tab-item-active, .tabs-striped .tab-item.active, .tabs-striped .tab-item.activated {margin-top: 0px;border-style: solid;border-width: 0 0 3px 0;border-color: #FF7A01; }.tabs-striped .tabs{border-bottom: 0px solid #ddd !important;}.tab-item{font-size: 17px;}.bar .title{margin: 1px 37px;}</style><style type="text/css">.tabs .tab-title{font-family:"微软雅黑" !important;}.tabs-striped .tab-item.tab-item-active, .tabs-striped .tab-item.active, .tabs-striped .tab-item.activated {margin-top: 0px;border-style: solid;border-width: 0 0 3px 0;border-color: #FF7A01; }.tabs-striped .tabs{border-bottom: 0px solid #ddd !important;}.tab-item{font-size: 17px;}.bar .title{margin: 1px 37px;}</style><style type="text/css">.tabs .tab-title{font-family:"微软雅黑" !important;}.tabs-striped .tab-item.tab-item-active, .tabs-striped .tab-item.active, .tabs-striped .tab-item.activated {margin-top: 0px;border-style: solid;border-width: 0 0 3px 0;border-color: #FF7A01; }.tabs-striped .tabs{border-bottom: 0px solid #ddd !important;}.tab-item{font-size: 17px;}.bar .title{margin: 1px 37px;}</style><style type="text/css">.tabs .tab-title{font-family:"微软雅黑" !important;}.tabs-striped .tab-item.tab-item-active, .tabs-striped .tab-item.active, .tabs-striped .tab-item.activated {margin-top: 0px;border-style: solid;border-width: 0 0 3px 0;border-color: #FF7A01; }.tabs-striped .tabs{border-bottom: 0px solid #ddd !important;}.tab-item{font-size: 17px;}.bar .title{margin: 1px 37px;}</style><style type="text/css">.tabs .tab-title{font-family:"微软雅黑" !important;}.tabs-striped .tab-item.tab-item-active, .tabs-striped .tab-item.active, .tabs-striped .tab-item.activated {margin-top: 0px;border-style: solid;border-width: 0 0 3px 0;border-color: #FF7A01; }.tabs-striped .tabs{border-bottom: 0px solid #ddd !important;}.tab-item{font-size: 17px;}.bar .title{margin: 1px 37px;}</style>
</head>
	<body ng-app="myApp" class="light-bg grade-a platform-browser platform-ios platform-ios9 platform-ios9_1 platform-ready">
		<ion-nav-view class="view-container" nav-view-transition="ios" nav-view-direction="none" nav-swipe=""><ion-tabs class="tabs-light pane tabs-bottom tabs-standard tabs-item-hide" abstract="true" nav-view="active" style="opacity: 1; transform: translate3d(0%, 0px, 0px);"><div class="tab-nav tabs">
			
	<ion-tab icon-on="ion-main_on" icon-off="ion-main_off" ng-click="tab('tabs/trade')"></ion-tab>

	<ion-tab icon-on="ion-trade_on" icon-off="ion-trade_off" ng-click="tab('tabs/moneyPack')"></ion-tab>

	<!--<ion-tab title="代理赚钱" icon-on="ion-tradedetial-on" icon-off="ion-tradedetial-off" href="#/tabs/discover">-->

		<!--<ion-nav-view name="discover-tab"> </ion-nav-view>-->

	<!--</ion-tab>-->

	<ion-tab icon-on="ion-ios-person-onn" icon-off="ion-ios-person-off" ng-click="tab('tabs/me')"></ion-tab>
	
<a ng-class="{'has-badge':badge, 'tab-hidden':isHidden(), 'tab-item-active': isTabActive()}" ng-disabled="disabled()" class="tab-item tab-item-active" ng-click="tab('tabs/trade')" icon-on="ion-main_on" icon-off="ion-main_off" style=""><!-- ngIf: badge --><!-- ngIf: getIcon() --><i class="icon ion-main_on" ng-if="getIcon()"></i><!-- end ngIf: getIcon() --><span class="tab-title ng-binding" ng-bind-html="title">交易</span></a><a ng-class="{'has-badge':badge, 'tab-hidden':isHidden(), 'tab-item-active': isTabActive()}" ng-disabled="disabled()" class="tab-item" ng-click="tab('tabs/moneyPack')" icon-on="ion-trade_on" icon-off="ion-trade_off"><!-- ngIf: badge --><!-- ngIf: getIcon() --><i class="icon ion-trade_off" ng-if="getIcon()"></i><!-- end ngIf: getIcon() --><span class="tab-title ng-binding" ng-bind-html="title">钱包</span></a><a ng-class="{'has-badge':badge, 'tab-hidden':isHidden(), 'tab-item-active': isTabActive()}" ng-disabled="disabled()" class="tab-item" ng-click="tab('tabs/me')" icon-on="ion-ios-person-onn" icon-off="ion-ios-person-off"><!-- ngIf: badge --><!-- ngIf: getIcon() --><i class="icon ion-ios-person-off" ng-if="getIcon()"></i><!-- end ngIf: getIcon() --><span class="tab-title ng-binding" ng-bind-html="title"></span></a></div><ion-nav-view name="trade-tab" class="view-container tab-content" nav-view="active" nav-view-transition="ios" nav-view-direction="forward" nav-swipe=""><ion-view class="pane" state="tabs.guess_trade" nav-view="active" style="opacity: 1; box-shadow: rgba(0, 0, 0, 0) 0px 0px 10px; transform: translate3d(0%, 0px, 0px);">
    <oni-tip><!-- ngIf: tipFlag --></oni-tip>
    <oni-bottom><!-- ngIf: trade_bottom_falg --></oni-bottom>
    <div class="guess">
        <!--定义音乐标签-->
        <div style="display: none">
            <audio src="../../images/mp3/BG.m4a" id="music_1" preload="auto" loop="loop"></audio>
            <audio src="../../images/mp3/bet.mp3" id="music_2" preload="auto"></audio>
            <audio src="../../images/mp3/cancelBtn.mp3" id="music_3" preload="auto"></audio>
            <audio src="../../images/mp3/countdown.mp3" id="music_4" preload="auto"></audio>
            <audio src="../../images/mp3/timeEnd.mp3" id="music_5" preload="auto"></audio>
            <audio src="../../images/mp3/flip.mp3" id="music_6" preload="auto"></audio>
            <audio src="../../images/mp3/chipreceive.mp3" id="music_7" preload="auto"></audio>
            <audio src="../../images/mp3/smallwin.mp3" id="music_8" preload="auto"></audio>
        </div>
        <div class="dealer" style="position: absolute;top: 0;left: 30%;width: 40%;height: 0;">
            <div id="dealerOne" style="position: absolute; top: 0px; left: 0px; right: 0px; bottom: 0px; width: 103.358px; height: 91.7299px;"></div>
        </div>
        <div class="guess_top">
            <div class="guess_top_title">
                <!--玩法介绍-->
                <div class="guess_top_title_left" ng-click="openDescPlay('guess_desc_content')">玩法介绍</div>
                <div class="guess_top_title_center"><marquee id="usertradenickname" behavior="scroll">“150****9991”盈利 90.00 元</marquee></div>
                <div class="guess_top_title_right" ng-click="openDescPlay('guess_chart_content')">走势图</div>
            </div>
            <!--进度条-->
            <div style="width:100%;padding: 0 7.3%;top: 15%;position: absolute;">
            <div class="guess_top_loadingLine" >
                <!--canvas-->
                <canvas id="canvas" ></canvas>
                <!--遮盖canvas-->
                <div class="guess_top_mask">

                </div>
            </div>
            </div>
            <!--美女-->
            <div class="girl"></div>
            <!--大单 极大 小单 大 小 单 双。。。-->
            <div class="guess_top_orders" >
                <div class="guess_top_orders_left">
                    <!--大单-->
                    <div class="guess_top_order_purple guess_top_order_1 guess_height" id="guess0" ng-click="g_betting('0')">
                        <div class="guess_purple_border" id="guessBorder0" style="display: none;"></div>
                        <div class="guess_top_orders_black_bg hide">
                            <div class="guess_top_orders_black_img guess_top_orders_black_img_small hide coin_one"></div>
                            <div class="guess_top_orders_black_img guess_top_orders_black_img_center hide coin_five"></div>
                            <div class="guess_top_orders_black_img guess_top_orders_black_img_big hide coin_ten"></div>
                        </div>
                    </div>
                    <!--<div style="height: 1.06%;width: 100%;"></div>-->
                    <div class="guess_top_order_gapx" style="width: 3.87591px; height: 3.87591px;"></div>
                    <!--大-->
                    <div class="guess_top_order_red guess_top_order_2 guess_height" id="guess1" ng-click="g_betting('1')" >
                        <div class="guess_red_border" id="guessBorder1" style="display: none;"></div>
                        <div class="guess_top_orders_black_bg hide">
                            <div class="guess_top_orders_black_img guess_top_orders_black_img_small hide coin_one"></div>
                            <div class="guess_top_orders_black_img guess_top_orders_black_img_center hide coin_five"></div>
                            <div class="guess_top_orders_black_img guess_top_orders_black_img_big hide coin_ten"></div>
                        </div>
                    </div>
                    <div class="guess_top_order_gapx" ></div>
                    <!--双-->
                    <div class="guess_top_order_blue guess_top_order_3 guess_height" id="guess2" ng-click="g_betting('2')">
                        <div class="guess_blue_border" id="guessBorder2" style="display: none;"></div>
                        <div class="guess_top_orders_black_bg hide">
                            <div class="guess_top_orders_black_img guess_top_orders_black_img_small hide coin_one"></div>
                            <div class="guess_top_orders_black_img guess_top_orders_black_img_center hide coin_five"></div>
                            <div class="guess_top_orders_black_img guess_top_orders_black_img_big hide coin_ten"></div>
                        </div>
                    </div>
                    <div class="guess_top_order_gapx"></div>
                    <!--大双-->
                    <div class="guess_top_order_purple guess_top_order_4 guess_height" id="guess3" ng-click="g_betting('3')">
                        <div class="guess_purple_border" id="guessBorder3" style="display: none;"></div>
                        <div class="guess_top_orders_black_bg hide">
                            <div class="guess_top_orders_black_img guess_top_orders_black_img_small hide coin_one"></div>
                            <div class="guess_top_orders_black_img guess_top_orders_black_img_center hide coin_five"></div>
                            <div class="guess_top_orders_black_img guess_top_orders_black_img_big hide coin_ten"></div>
                        </div>
                    </div>
                </div>
                <div class="guess_top_order_gapy" style="width: 1.35%;height: 1px;float: left;"></div>
                <div class="guess_top_orders_center">
                    <!--极大-->
                    <div class="guess_top_order_orange guess_top_order_5 guess_orange" id="guess4" ng-click="g_betting('4')">
                        <div class="guess_orange_border" id="guessBorder4"></div>
                        <div class="guess_top_orders_black_bg hide">
                            <div class="guess_top_orders_black_img guess_top_orders_black_img_small hide coin_one"></div>
                            <div class="guess_top_orders_black_img guess_top_orders_black_img_center hide coin_five"></div>
                            <div class="guess_top_orders_black_img guess_top_orders_black_img_big hide coin_ten"></div>
                        </div>
                    </div>
                    <div class="guess_top_order_gapx" ></div>
                    <!--结果-->
                    <div class="guess_top_order_green" style="width:100%;">
                        <div class="guess_top_order_green_top" style="width:100%">
                            <!--下单中-->
                            <div class="guess_top_order_green_top_order" style="display: block;">
                                <div class="guess_top_order_green_top_order_top"><div>即将开奖期号</div><div id="curphaseid"></div></div>
                                <div class="guess_top_order_green_top_order_center" id="countDownBox">
                                    <div class="orderTimeCoountDown cdNumNormal" style="display: flex;"></div>
                                    <div class="orderTimeCoountDown hide cdNumLast" style="display: none; transform: scale(1, 1);"></div>
                                </div>
                                <div class="guess_top_order_green_top_order_bottom" id="countDownDesc">下单中</div>
                            </div>
                            <!--下单结果-->
                            <div class="guess_top_order_green_top_result" style="display: none;">
                                <div class="guess_top_order_green_top_result_top">
                                    <div class="result_title result_last_num_back">
                                        <div class="result_title_txt">QQ在线人数</div>
                                        <div class="result_title_txt"><span class="result_title_txt_num"></span><span class="result_title_txt_color"></span></div>
                                    </div>
                                    <div class="result_last_three">
                                        <div class="result_last_num1 result_last_num_back">0</div>
                                        <div class="result_last_num_add1 result_last_num_back">+</div>
                                        <div class="result_last_num2 result_last_num_back">0</div>
                                        <div class="result_last_num_add2 result_last_num_back">+</div>
                                        <div class="result_last_num3 result_last_num_back">0</div>
                                        <div class="result_last_num_equle result_last_num_back">=</div>
                                    </div>
                                </div>
                                <div class="result_number result_last_num_back">18</div>
                            </div>
                        </div>
                        <!--往期结果-->
                        <div class="guess_top_order_green_bottom" style="height: 27.1314px;"><div class="guess_top_order_green_bottom_num" style="width: 20.9299px; height: 20.9299px;"><img alt="" class="hide" src="/Public/Home/Mobile/Images/num/num-13.png"></div><div class="guess_top_order_green_bottom_num" style="width: 20.9299px; height: 20.9299px;"><img alt="" class="hide" src="/Public/Home/Mobile/Images/num/num-13.png"></div><div class="guess_top_order_green_bottom_num" style="width: 20.9299px; height: 20.9299px;"><img alt="" class="hide" src="/Public/Home/Mobile/Images/num/num-13.png"></div><div class="guess_top_order_green_bottom_num" style="width: 20.9299px; height: 20.9299px;"><img alt="" class="hide" src="/Public/Home/Mobile/Images/num/num-13.png"></div><div class="guess_top_order_green_bottom_num" style="width: 20.9299px; height: 20.9299px;"><img alt="" class="hide" src="/Public/Home/Mobile/Images/num/num-13.png"></div></div>
                    </div>
                    <div class="guess_top_order_gapx" ></div>
                    <!--极小-->
                    <div class="guess_top_order_orange guess_top_order_6 guess_orange" id="guess5" ng-click="g_betting('5')" >
                        <div class="guess_orange_border" id="guessBorder5" style="display: none;"></div>
                        <div class="guess_top_orders_black_bg hide">
                            <div class="guess_top_orders_black_img guess_top_orders_black_img_small hide coin_one"></div>
                            <div class="guess_top_orders_black_img guess_top_orders_black_img_center hide coin_five"></div>
                            <div class="guess_top_orders_black_img guess_top_orders_black_img_big hide coin_ten"></div>
                        </div>
                    </div>
                </div>
                <div style="width: 1.35%;height: 1px;float: left;"></div>
                <div class="guess_top_orders_right">
                    <!--小单-->
                    <div class="guess_top_order_purple guess_top_order_7 guess_height" id="guess6" ng-click="g_betting('6')">
                        <div class="guess_purple_border" id="guessBorder6" style="display: none;"></div>
                        <div class="guess_top_orders_black_bg hide">
                            <div class="guess_top_orders_black_img guess_top_orders_black_img_small hide coin_one"></div>
                            <div class="guess_top_orders_black_img guess_top_orders_black_img_center hide coin_five"></div>
                            <div class="guess_top_orders_black_img guess_top_orders_black_img_big hide coin_ten"></div>
                        </div>
                    </div>
                    <div class="guess_top_order_gapx"></div>
                    <!--小-->
                    <div class="guess_top_order_red guess_top_order_8 guess_height" id="guess7" ng-click="g_betting('7')" >
                        <div class="guess_red_border" id="guessBorder7" style="display: none;"></div>
                        <div class="guess_top_orders_black_bg hide">
                            <div class="guess_top_orders_black_img guess_top_orders_black_img_small hide coin_one"></div>
                            <div class="guess_top_orders_black_img guess_top_orders_black_img_center hide coin_five"></div>
                            <div class="guess_top_orders_black_img guess_top_orders_black_img_big hide coin_ten"></div>
                        </div>
                    </div>
                    <div class="guess_top_order_gapx" ></div>
                    <!--单-->
                    <div class="guess_top_order_blue guess_top_order_9 guess_height" id="guess8" ng-click="g_betting('8')" >
                        <div class="guess_blue_border" id="guessBorder8" style="display: none;"></div>
                        <div class="guess_top_orders_black_bg hide">
                            <div class="guess_top_orders_black_img guess_top_orders_black_img_small hide coin_one"></div>
                            <div class="guess_top_orders_black_img guess_top_orders_black_img_center hide coin_five"></div>
                            <div class="guess_top_orders_black_img guess_top_orders_black_img_big hide coin_ten"></div>
                        </div>
                    </div>
                    <div class="guess_top_order_gapx" ></div>
                    <!--小双-->
                    <div class="guess_top_order_purple guess_top_order_10 guess_height" id="guess9" ng-click="g_betting('9')" >
                        <div class="guess_purple_border" id="guessBorder9" style="display: none;"></div>
                        <div class="guess_top_orders_black_bg hide">
                            <div class="guess_top_orders_black_img guess_top_orders_black_img_small hide coin_one"></div>
                            <div class="guess_top_orders_black_img guess_top_orders_black_img_center hide coin_five"></div>
                            <div class="guess_top_orders_black_img guess_top_orders_black_img_big hide coin_ten"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="guess_top_bottom_row_box guess_top_bottom_row_box_txt">
                <div class="guess_top_bottom_row_txt">
                    开奖结果取自腾讯音视频主页(http://im.qq.com/album/v/)右上角"当前在线人数",后三位相加为开奖结果
                </div>
            </div>
            <div class="guess_top_bottom_row_box guess_top_bottom_row_box_img" style="display: none;">
                <div class="guess_top_bottom_row1"><div class="guess_top_bottom_num_wh" style="height: 25px; width: 25px; line-height: 25px;"><img src="/Public/Home/Mobile/Images/num/num-0.png" alt=""></div><div class="guess_top_bottom_num_wh" style="height: 25px; width: 25px; line-height: 25px; margin-left: 3px;"><img src="/Public/Home/Mobile/Images/num/num-1.png" alt=""></div><div class="guess_top_bottom_num_wh" style="height: 25px; width: 25px; line-height: 25px; margin-left: 3px;"><img src="/Public/Home/Mobile/Images/num/num-2.png" alt=""></div><div class="guess_top_bottom_num_wh" style="height: 25px; width: 25px; line-height: 25px; margin-left: 3px;"><img src="/Public/Home/Mobile/Images/num/num-3.png" alt=""></div><div class="guess_top_bottom_num_wh" style="height: 25px; width: 25px; line-height: 25px; margin-left: 3px;"><img src="/Public/Home/Mobile/Images/num/num-4.png" alt=""></div><div class="guess_top_bottom_num_wh" style="height: 25px; width: 25px; line-height: 25px; margin-left: 3px;"><img src="/Public/Home/Mobile/Images/num/num-5.png" alt=""></div><div class="guess_top_bottom_num_wh" style="height: 25px; width: 25px; line-height: 25px; margin-left: 3px;"><img src="/Public/Home/Mobile/Images/num/num-6.png" alt=""></div><div class="guess_top_bottom_num_wh" style="height: 25px; width: 25px; line-height: 25px; margin-left: 3px;"><img src="/Public/Home/Mobile/Images/num/num-7.png" alt=""></div><div class="guess_top_bottom_num_wh" style="height: 25px; width: 25px; line-height: 25px; margin-left: 3px;"><img src="/Public/Home/Mobile/Images/num/num-8.png" alt=""></div><div class="guess_top_bottom_num_wh" style="height: 25px; width: 25px; line-height: 25px; margin-left: 3px;"><img src="/Public/Home/Mobile/Images/num/num-9.png" alt=""></div><div class="guess_top_bottom_num_wh" style="height: 25px; width: 25px; line-height: 25px; margin-left: 3px;"><img src="/Public/Home/Mobile/Images/num/num-10.png" alt=""></div><div class="guess_top_bottom_num_wh" style="height: 25px; width: 25px; line-height: 25px; margin-left: 3px;"><img src="/Public/Home/Mobile/Images/num/num-11.png" alt=""></div><div class="guess_top_bottom_num_wh" style="height: 25px; width: 25px; line-height: 25px; margin-left: 3px;"><img src="/Public/Home/Mobile/Images/num/num-12.png" alt=""></div><div class="guess_top_bottom_num_wh" style="height: 25px; width: 25px; line-height: 25px; margin-left: 3px;"><img src="/Public/Home/Mobile/Images/num/num-13.png" alt=""></div></div>
                <div class="guess_top_bottom_row2"><div class="guess_top_bottom_num_wh" style="height: 25px; width: 25px; line-height: 25px;"><img src="/Public/Home/Mobile/Images/num/num-14.png" alt=""></div><div class="guess_top_bottom_num_wh" style="height: 25px; width: 25px; line-height: 25px; margin-left: 3px;"><img src="/Public/Home/Mobile/Images/num/num-15.png" alt=""></div><div class="guess_top_bottom_num_wh" style="height: 25px; width: 25px; line-height: 25px; margin-left: 3px;"><img src="/Public/Home/Mobile/Images/num/num-16.png" alt=""></div><div class="guess_top_bottom_num_wh" style="height: 25px; width: 25px; line-height: 25px; margin-left: 3px;"><img src="/Public/Home/Mobile/Images/num/num-17.png" alt=""></div><div class="guess_top_bottom_num_wh" style="height: 25px; width: 25px; line-height: 25px; margin-left: 3px;"><img src="/Public/Home/Mobile/Images/num/num-18.png" alt=""></div><div class="guess_top_bottom_num_wh" style="height: 25px; width: 25px; line-height: 25px; margin-left: 3px;"><img src="/Public/Home/Mobile/Images/num/num-19.png" alt=""></div><div class="guess_top_bottom_num_wh" style="height: 25px; width: 25px; line-height: 25px; margin-left: 3px;"><img src="/Public/Home/Mobile/Images/num/num-20.png" alt=""></div><div class="guess_top_bottom_num_wh" style="height: 25px; width: 25px; line-height: 25px; margin-left: 3px;"><img src="/Public/Home/Mobile/Images/num/num-21.png" alt=""></div><div class="guess_top_bottom_num_wh" style="height: 25px; width: 25px; line-height: 25px; margin-left: 3px;"><img src="/Public/Home/Mobile/Images/num/num-22.png" alt=""></div><div class="guess_top_bottom_num_wh" style="height: 25px; width: 25px; line-height: 25px; margin-left: 3px;"><img src="/Public/Home/Mobile/Images/num/num-23.png" alt=""></div><div class="guess_top_bottom_num_wh" style="height: 25px; width: 25px; line-height: 25px; margin-left: 3px;"><img src="/Public/Home/Mobile/Images/num/num-24.png" alt=""></div><div class="guess_top_bottom_num_wh" style="height: 25px; width: 25px; line-height: 25px; margin-left: 3px;"><img src="/Public/Home/Mobile/Images/num/num-13.png" alt=""></div><div class="guess_top_bottom_num_wh" style="height: 25px; width: 25px; line-height: 25px; margin-left: 3px;"><img src="/Public/Home/Mobile/Images/num/num-26.png" alt=""></div><div class="guess_top_bottom_num_wh" style="height: 25px; width: 25px; line-height: 25px; margin-left: 3px;"><img src="/Public/Home/Mobile/Images/num/num-27.png" alt=""></div></div>
            </div>
        </div>
        <div class="guess_bottom">
            <div class="guess_bottom_chess">
                <div class="guess_bottom_chess_left">
                    <div class="guess_sound" ng-click="music_onoff()" style="height: 43px; width: 43px;"></div>
                </div>
                <div class="guess_bottom_chess_center">
                    <div class="guess_bottom_chess_one guess_bottom_chess_num_box" id="one" ng-click="showChip('10','one')" style="height: 77.4px; width: 77.4px;">
                        <div class="guess_bottom_chess_one_bg"></div>
                        <!-- ngIf: 10==chipFlag -->
                        <div class="guess_bottom_chess_one_glow" ng-if="10==chipFlag"></div>
                    </div>
                    <div class="guess_bottom_chess_five guess_bottom_chess_num_box" id="five" ng-click="showChip('50','five')" style="height: 77.4px; width: 77.4px;">
                        <div class="guess_bottom_chess_five_bg"></div>
                        <!-- ngIf: 50==chipFlag -->
                    </div>
                    <div class="guess_bottom_chess_ten guess_bottom_chess_num_box" id="ten" ng-click="showChip('100','ten')" style="height: 77.4px; width: 77.4px;">
                        <div class="guess_bottom_chess_ten_bg"></div>
                        <!-- ngIf: 100==chipFlag -->
                    </div>
                </div>
                <div class="guess_bottom_chess_right">
                    <div class="guess_cancle" ng-click="g_bettingcancel()" style="height: 43px; width: 43px;"></div>
                </div>
            </div>
            <div class="guess_bottom_userinfo">
                <div class="guess_bottom_userinfo_money" id="userMoney">余额：<span id="accountMoney"><?php echo ($balance); ?></span></div>
                <div class="guess_bottom_userinfo_recharge">
                    <div class="guess_bottom_userinfo_recharge_btn" ng-click="guessRecharge()">充值</div>
                </div>
                <div class="guess_bottom_userinfo_order ng-binding" style="display: none;" id="bettleMoneyDiv">
                    已下注：0(手续费0元)
                </div>
            </div>
        </div>
    </div>

    <div class="guess_desc" style="display: none">
        <div class="guess_desc_close_btn" ng-click="guess_desc_close_btn()"></div>
        <ion-content class="guess_desc_content scroll-content ionic-scroll" style="display: none"><div class="scroll">
            <div class="guess_desc_one">企鹅分分彩开奖号取自腾讯实时在线用户人数。取腾讯实时在线人数后三位相加，所得的结果即为企鹅分分彩的开奖结果。例如：2017-03-04 16：06：00 的当前在线人数为239469286，取其后三位2+8+6相加得开奖结果16。</div>
            <div class="guess_desc_two">腾讯实时在线人数取自腾讯音视频主页（http://im.qq.com/album/v/）右上角”当前在线人数“。附第三方统计网站数据源：http://qq-ssc.com/ 可以回溯查看过去几个月内的QQ在线人数统计结果。</div>
            <img src="/Public/Home/Mobile/Images/slice1.jpg" alt="">
            <div style="width: 100%;text-align: center;line-height: 1.5">http://im.qq.com/album/v/</div>
            <img src="/Public/Home/Mobile/Images/slice3.png" alt="">
            <div style="width: 100%;text-align: center;line-height: 1.5">http://qq-ssc.com/</div>

            <div style="margin-top: 10px;">赔率说明</div>
            <div class="guess_desc_table">
                <div class="guess_desc_table_title">
                    <div>玩法</div>
                    <div class="guess_desc_table_center">命中数字</div>
                    <div>赔率</div>
                </div>
                <div class="guess_desc_max">
                    <div>豹子</div>
                    <div class="guess_desc_table_center">000, 111, 222, 333, 444, 555, 666, 777, 888, 999</div>
                    <div>1:60</div>
                </div>
                <div class="guess_desc_min">
                    <div>顺子</div>
                    <div class="guess_desc_table_center">012, 123, 234, 345, 456, 567, 678, 789, 987, 876, 765, 654, 543, 432, 321, 210</div>
                    <div>1:30</div>
                </div>
                <div class="guess_desc_big">
                    <div>大</div>
                    <div class="guess_desc_table_center">14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27</div>
                    <div>1:2</div>
                </div>
                <div class="guess_desc_small">
                    <div>小</div>
                    <div class="guess_desc_table_center">0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13</div>
                    <div>1:2</div>
                </div>
                <div class="guess_desc_single">
                    <div>单</div>
                    <div class="guess_desc_table_center">1, 3, 5, 7, 9, 11, 13, 15, 17, 19, 21, 23, 25, 27</div>
                    <div>1:2</div>
                </div>
                <div class="guess_desc_double">
                    <div>双</div>
                    <div class="guess_desc_table_center">0, 2, 4, 6, 8, 10, 12, 14, 16, 18, 20, 22, 24, 26</div>
                    <div>1:2</div>
                </div>
                <div class="guess_desc_bigsingle">
                    <div>大单</div>
                    <div class="guess_desc_table_center">15, 17, 19, 21, 23, 25, 27</div>
                    <div>1:4</div>
                </div>
                <div class="guess_desc_bigdouble">
                    <div>大双</div>
                    <div class="guess_desc_table_center">14, 16, 18, 20, 22, 24, 26</div>
                    <div>1:3</div>
                </div>
                <div class="guess_desc_smallsingle">
                    <div>小单</div>
                    <div class="guess_desc_table_center">1, 3, 5, 7, 9, 11, 13</div>
                    <div>1:3</div>
                </div>
                <div class="guess_desc_smalldouble">
                    <div>小双</div>
                    <div class="guess_desc_table_center">0, 2, 4, 6, 8, 10, 12</div>
                    <div>1:4</div>
                </div>
            </div>
            <div style="height: 30px;width: 100%;">&nbsp;</div>
        </div><div class="scroll-bar scroll-bar-v"><div class="scroll-bar-indicator scroll-bar-fade-out"></div></div></ion-content>
        <div class="guess_chart_content" style="display: none">
            <ion-content class="guess_chart_scroll scroll-content ionic-scroll"><div class="scroll">
                <div class="guess_chart_box" id="guess_chart_box"></div>
                <div style="height: 30px;width: 100%;">&nbsp;</div>
            </div><div class="scroll-bar scroll-bar-v"><div class="scroll-bar-indicator scroll-bar-fade-out"></div></div></ion-content>
            <div class="guess_chart_box_title">
                <div class="guessChart_number">期号</div>
                <div class="guessChart_sum">值</div>
                <div class="guessChart_big">大</div>
                <div class="guessChart_small">小</div>
                <div class="guessChart_single">单</div>
                <div class="guessChart_double">双</div>
                <div class="guessChart_bigDouble">大双</div>
                <div class="guessChart_smallDouble">小双</div>
                <div class="guessChart_bigSingle">大单</div>
                <div class="guessChart_smallSingle">小单</div>
                <div class="guessChart_shun">顺子</div>
                <div class="guessChart_bao">豹子</div>
            </div>
        </div>
    </div>
    <pop-msg><div ng-switch="showMsg">
    <!-- ngSwitchWhen: success -->
    <!-- ngSwitchWhen: fail -->
</div></pop-msg>
</ion-view></ion-nav-view></ion-tabs></ion-nav-view>
		<oni-login><div ng-switch="loginFlag" style="width: 100%;position: absolute;top: 0;bottom: 0;">
    <!-- ngSwitchWhen: login -->
    <!-- ngSwitchWhen: register -->
    <!-- ngSwitchWhen: newPass -->
</div></oni-login>
		<user-login><!-- ngIf: userLoginFlag --></user-login>
	

<div class="backdrop"></div><div id="MEIQIA-PANEL-HOLDER"><iframe id="MEIQIA-IFRAME" src="http://eco-api.meiqia.com/dist/mobile-fiesta.html?f4kg2bw8j5ze61or" frameborder="0" scrolling="no" allowtransparency="true"></iframe> </div><div id="MEIQIA-INVITE"><span id="MEIQIA-INVITE-CLOSE" class="MEIQIA-ICON"></span> <div id="MEIQIA-INVITE-INSIDE">您好，当前有专业客服人员在线，让我们来帮助您吧。</div> <span id="MEIQIA-INVITE-ARROW1"></span> <span id="MEIQIA-INVITE-ARROW2"></span></div><div class="click-block click-block-hide"></div><div class="loading-container"><div class="loading"></div></div>


<!-- fly飞行图元素-->
<img class="u-flyer" >


<Script>
    var balance;
    var all_chouma=0;
    var qi_shu;
    var balance_clone;
</script>
<script async="" charset="UTF-8" src="/Public/Home/Mobile/Js/get_time.js"></script>
<script async="" charset="UTF-8" src="/Public/Home/Mobile/Js/game_ajax.js"></script>
<script async="" charset="UTF-8" src="/Public/Home/Mobile/Js/huanleqq_zishiying.js"></script>
<script async="" charset="UTF-8" src="/Public/Home/Mobile/Js/huanleqq.js"></script>
<script async="" charset="UTF-8" src="/Public/Home/Mobile/Js/zhengshi_begin.js"></script>

</body>
</html>