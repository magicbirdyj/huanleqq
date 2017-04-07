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


 
<link rel="stylesheet" type="text/css" href="/Public/Home/Mobile/Css/category.css">
<link rel="stylesheet" type="text/css" href="/Public/Home/Mobile/Css/index.css">
<link rel="stylesheet" type="text/css" href="/Public/Home/Mobile/Css/search_m.css">
<link rel="stylesheet" type="text/css" href="/Public/Home/Mobile/Css/shop_1.css" id='shop_1'>
</head>
<body>
    <div class="min_menu shareBtn" id='sousou'>
    <span class="iconfont tb_fenxiang"id="sousou" style='font-size: 22px'>&#xe60d;</span>
    <span class="fenxiang">搜索</span>
    </div>
    <div class="fanhui padding"><a href="<?php echo U('index/index');?>"><span class="iconfont tb_fanhui"id="shangjia_info_fanhui">&#xe603;</span></a>1元购</div>
<div class="box">

   
    
    
    
    



    
    
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="shopping">
                <a  href="<?php echo U('Goods/index',array('goods_id'=>$vo['goods_id']));?>" class="goods_a">
                    <img src="<?php echo ($vo['goods_img_qita_0']); ?>" class="goods_img img_fengge_1"/>
                    <img src="<?php echo ($vo['goods_img']); ?>" class="goods_img img_fengge_2"/>
                    <div class="goods_infor">
                    <div class="goods_title shenglue border-bottom"><?php echo ($vo['goods_name']); ?></div>
                    <div class="goods_bottom">
                        <div class="goods_infor_left">
                            <span class="iconfont">&#xe61d;</span>
                            <span class="rentuan"><?php echo ($vo['tuan_number']); ?>人团</span>
                            <span class="price_red price"><span class='rmb'>&yen;</span><?php echo (floor($vo['tuan_price'])); ?></span>
                            <span class="price_red yuan">元</span>
                            <del style="margin-left: 5px;">单买价：<?php echo (floor($vo['price'])); ?>元</del>
                        </div>
                        <div class="goods_infor_right">
                            <span class='yituan'>已团<span class='maohao'>：</span><?php echo ($vo['buy_number']); ?></span>
                        </div>
                    </div>
                    </div>
                </a>
            </div><!--商品1--><?php endforeach; endif; else: echo "" ;endif; ?>
    
<div class="page_foot"><?php echo ($page_foot_iphone); ?></div>


</div><!--主内容盒子-->






<script src="/Public/Home/Mobile/Js/new_order.js" type="text/javascript"></script>



<script>

//搜索按钮
$('#sousou').bind('click',function(){
    window.location.href="<?php echo U('Index/search_m');?>"; 
});
</script>
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