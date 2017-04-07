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
<link rel="stylesheet" type="text/css" href="/Public/Home/Mobile/Css/order_view.css">
<link rel="stylesheet" type="text/css" href="/Public/Home/Mobile/Css/order_tuikuang.css">
<link rel="stylesheet" type="text/css" href="/Public/Home/Mobile/Css/order_shouhou_status.css">
</head>

<body>
    <div class="fanhui padding"><a href="javascript:history.back()"><span class="iconfont tb_fanhui"id="shangjia_info_fanhui">&#xe603;</span></a>售后状态</div>
    <div class="view">
        <div class="tuikuang_div">
            <div class="d2_title">售后状态</div>
            <div class="select_div">
                <div class="juti">
                    <?php if(($order['pay_status'] == 2) OR ($order['pay_status'] == 3)): ?>等待商家确认
                        <?php elseif(($order['pay_status'] == 4)): ?>
                        商家已经退款，请查收您的微信账户
                        <?php elseif(($order['pay_status'] == 5)): ?>
                        商家已经同意退货,将电话联系您，请注意接听<?php endif; ?>
            </div>
            </div>
            
            <div class="d2_title">售后类型</div>
            <div class="select_div">
                <div class="juti">
                    <?php if(($order['pay_status'] == 2) OR ($order['pay_status'] == 4)): ?>申请退货
                    <?php elseif(($order['pay_status'] == 3) OR ($order['pay_status'] == 5)): ?>
                    申请换货<?php endif; ?>
                </div>
            </div>

            <div class="d2_title">售后原因</div>
            <div class="select_div">
                <div class="juti"><?php echo ($order['shouhou_cause']); ?></div>
            </div>
            
            <div class="d2_title">问题描述</div>
            <div class="select_div">
            <div class="pingjia_box">
            <div class="pingjia_textarea"><?php echo ($order['shouhou_miaoshu']); ?></div>
            
            <div class="pingjia_box_szp">
                <div class="file_tr">
                    <div class="tr_td1" style="height: 35px;line-height: 35px;">凭证照片：</div>
                    <?php if(is_array($arr_img)): $i = 0; $__LIST__ = $arr_img;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="div_goods_img"><img src="" class="empty_img" /><img class="goods_img" src='<?php echo ($vo); ?>' /></div><?php endforeach; endif; else: echo "" ;endif; ?>
                    
                </div>          
            </div>
            
            </div>
            </div>
            <div class="div_fangda">
            <img class="img_fangda" src="/Public/Uploads/image/temp/20160811/14709045708852719180.png"/>
            </div>
            <div class="d2_title"> 联系手机</div>
            <div class="select_div"><?php echo ($order['shouhou_iphone']); ?></div>
            <div class="d2_title"> 售后须知</div>
            <div class="select_div">
                <span style='font-size: 12px;'>请按照提示关注维权进度和超时提醒并提供相应凭证</span>
            </div>
           
            
          
    </div>
        
                <?php if(($order['pay_status'] == 2) OR ($order['pay_status'] == 3)): ?><a style="width:40%;float: left;margin-left: 7%" class="button_a_lvse" href='javascript:void(0)' id='quxiao'>取消售后</a>
                <a style="width:40%;float: left;margin-left: 6%" class="button_a_lvse" href='<?php echo U("Order/shouhou",array("order_id"=>$order["order_id"]));?>' >重新申请</a><?php endif; ?>
        </div>

   <form id = "form_file_jia" enctype="multipart/form-data" action="<?php echo U('Order/file_jia');?>" method="post">   
        <input name="file_img" type="file"  style="visibility:hidden; width:0px; height: 0px;"/>
    </form>   
    

    <script>
        var order_id="<?php echo ($order['order_id']); ?>";
    </script>
<script src="/Public/Home/Mobile/Js/order_status.js" type="text/javascript"></script>



  <div class="footer">
      <div class="ui-footer">
                  <a href="<?php echo U('Index/index');?>"><span class=" iconfont foot_home foot_tb">&#xe60f;</span><span>首页</span></a>
                  <a href="<?php echo U('Member/sellection');?>"><span class=" iconfont foot_shoucang foot_tb">&#xe620;</span><span>我的收藏</span></a>
                  <a href="<?php echo U('Member/cart');?>"><span class="iconfont foot_pintuan foot_tb">&#xe622;</span><span>我的拼团</span></a>
                  <a href="<?php echo U('Member/index');?>"><span class=" iconfont foot_wode foot_tb">&#xe60a;</span><span>我的果果</span></a>
          </div>
  </div> 





<script>
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
            title: '17一起网', // 分享标题
            imgUrl: 'http://www.17each.com/Public/Home/Images/menu_and_foot/logo.png' // 分享图标
        });
        wx.onMenuShareAppMessage({
            title: '17一起网', // 分享标题
            desc: "要“17”，不要“each”，节省50%费用，拥有梦幻婚礼不再是梦", // 分享描述
            imgUrl: 'http://www.17each.com/Public/Home/Images/menu_and_foot/logo.png' // 分享图标
        });
        wx.onMenuShareQQ({
            title: '17一起网', // 分享标题
            desc: "要“17”，不要“each”，节省50%费用，拥有梦幻婚礼不再是梦", // 分享描述
            imgUrl: 'http://www.17each.com/Public/Home/Images/menu_and_foot/logo.png' // 分享图标
        });
        wx.onMenuShareQZone({
            title: '17一起网', // 分享标题
            desc: "要“17”，不要“each”，节省50%费用，拥有梦幻婚礼不再是梦", // 分享描述
            imgUrl: 'http://www.17each.com/Public/Home/Images/menu_and_foot/logo.png' // 分享图标
        });
    });
    
</script>

</body>
</html>