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
<link rel="stylesheet" type="text/css" href="/Public/Home/Mobile/Css/goods.css">
<link rel="stylesheet" type="text/css" href="/Public/Home/Mobile/Css/buy.css">

</head>

<body>
    <?php if(($is_ztcg == 'ddct') and ($is_ctcg == 0)): ?><div class="fixed_bottom" style='width:100%;bottom: 15px;background-color:rgba(0,0,0,0);'>
            <a href="<?php echo U('Index/index');?>" class="button_a_lvse left_button"><span class="iconfont tb_shouye">&#xe60f;</span>更多拼团</a>
        <a id='wyct' href="javascript:void(0)" class='button_a_lvse right_button'>我也要参团</a>
        </div>
    <form name="cantuan_buy" action="<?php echo U('Goods/cantuan_buy');?>" method="get">
        <input name="tuan_no" type="hidden" value="<?php echo ($tuan_no); ?>" />
        <?php if($zx_shuxing != false): ?><input name="zx_shuxing" type="hidden" value="" /><?php endif; ?>
    </form>
    <?php elseif(($is_ztcg == 'ztcg') or ($is_ztcg == 'ztsb') or ($is_ctcg > 0)): ?>
        <div class="fixed_bottom" style='width:100%;bottom: 15px;background-color:rgba(0,0,0,0);'>
            <a href="<?php echo U('Index/index');?>" class="button_a_lvse left_button"><span class="iconfont tb_shouye">&#xe60f;</span>更多拼团</a>
        <a href="<?php echo U('Goods/kaituan_buy',array('goods_id'=>$goods['goods_id']));?>" class='button_a_lvse right_button'>我也开个团</a>
        </div><?php endif; ?>
<div style="width:100%;background-color: #f0efed;margin-bottom: 105px;" id="shop">
<div class="fanhui padding"><a href="javascript:history.back()"><span class="iconfont tb_fanhui"id="shangjia_info_fanhui">&#xe603;</span></a><?php echo ($title); ?></div>
<table class="buy_table" cellspacing="0">
<tr class="buy_table_head">
    <td colspan="2">
        <img src="<?php echo ($goods['goods_img']); ?>"  />
        <div class="goods_name">
            <div class="name"><?php echo ($goods['goods_name']); ?></div>
            <div class="name_price"><span class="price_red"><?php echo ($goods['tuan_number']); ?></span>人团： &yen <span class="price_red"><?php echo (floatval($goods['tuan_price'])); ?></span> /<?php echo ($goods['units']); ?></div>
        </div>
    </td>
    <?php if($is_ztcg == 'ztcg'): ?><td class="tuangou_success iconfont"> &#xe633;</td><?php endif; ?>
    <?php if($is_ztcg == 'ztsb'): ?><td class="tuangou_success iconfont" style="color: #888;"> &#xe632;</td><?php endif; ?>
</tr>
</table>
<div class="tuan_zhanshi">
    <div class="tuan_all_and_muqian">
    <div class="tuan_all">
        <span class="head_span"> <img src="<?php echo ($goods['tuanzhang_head_url']); ?>" class='head_img' /></span>
        <?php if(is_array($tuanyuan)): $i = 0; $__LIST__ = $tuanyuan;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><span class="head_span"><img src="<?php echo ($vo['head_url']); ?>" class='head_img'/></span><?php endforeach; endif; else: echo "" ;endif; ?>
        <?php $__FOR_START_21667__=$tuanyuan_count+1;$__FOR_END_21667__=$goods['tuan_number'];for($i=$__FOR_START_21667__;$i < $__FOR_END_21667__;$i+=1){ ?><span class="iconfont tb_tuan">&#xe623;</span><?php } ?>
    </div>
    </div>
    <?php if($goods['tuan_number'] != $goods['count']): ?><div style='text-align: center;padding-bottom: 10px;' id='tishi_span'>还差<span class='price_red'><?php echo ($goods['tuan_number']-$goods['count']); ?></span>人,赶紧点右上角分享给朋友吧</div>
    <div class='time'>剩余 <span id='hours' class='time_span'>&nbsp;&nbsp;&nbsp;&nbsp;</span>：<span id='minutes' class='time_span'>&nbsp;&nbsp;&nbsp;&nbsp;</span>：<span id='seconds' class='time_span'>&nbsp;&nbsp;&nbsp;&nbsp;</span> 结束</div>
    <hr class="hr" /><?php endif; ?>
</div>
<div id='button_pintuan_juti' class="price_red">点我收起拼团详情</div>
<div style="text-align: center;" id='pintuan_juti'>
<div class='triangle-up'></div>
<div class="pintuan_juti">
    <span class="head_span float_l" style='margin-right: 10px;'> <img src="<?php echo ($goods['tuanzhang_head_url']); ?>" class='head_img' /> </span>
    <span class="float_l">团长： <?php echo ($goods['tuanzhang_user_name']); ?></span>
    <span class="float_r"><?php echo (date('Y-m-d H:i:s',$goods['tuanzhang_created'])); ?> 开团</span>
</div>
<?php if(is_array($tuanyuan)): $i = 0; $__LIST__ = $tuanyuan;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class='triangle-up triangle-up_tuanyuan'></div>
    <div class="pintuan_juti pintuan_juti_tuanyuan">
        <span class="head_span float_l" style='margin-right: 10px;'> <img src="<?php echo ($vo['head_url']); ?>" class='head_img' /> </span>
        <span class="float_l"><?php echo ($vo['user_name']); ?></span>
        <span class="float_r"><?php echo (date('Y-m-d H:i:s',$vo['created'])); ?> 参团</span>
    </div><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
</div>

<?php if($zx_shuxing != null): ?><div id="div_xuanze">
        <div class="fanhui padding"><span class="iconfont tb_fanhui" id="xuanze_fanhui">&#xe62d;</span>选择属性</div>
        <div class="order_row">
                <div class='td_l'>
                    <div class="picture"><img src="<?php echo ($goods['goods_img']); ?>"></div>
                </div>
                <div class="td_r">
                    <div class="info_name shenglue"><?php echo ($goods['goods_name']); ?></div>
                    <div class="info_name shenglue" id="yixuan">已选：</div>
                </div>
        </div>
        <?php if(is_array($zx_shuxing)): $i = 0; $__LIST__ = $zx_shuxing;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="zx_shuxing border-bottom">
            <div class="zx_shuxing_title"><?php echo ($key); ?></div>
            <ul class="zx_shuxing_ul">
                <?php if(is_array($vo)): $i = 0; $__LIST__ = $vo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$shuxingzhi): $mod = ($i % 2 );++$i;?><li><?php echo ($shuxingzhi); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
        <a class='button_a_lvse wyct' href='javascript:void()'  style="margin-top: 20px;">确定参团</a> 
    </div><?php endif; ?>

<div style='margin-bottom: 105px;'></div>
<div id="fixed_tishi"></div>
<div id="overlay"></div><!--遮罩层div-->
<div id="guanzhu">
    <div class="gz_title">酱紫拼拼，拼实惠，拼乐趣</div>
    <div class="guanzhu_content">
        <div class="gz_content_text text_xiao"><span class="red">关注酱紫拼拼</span>，以便购买后接受拼团和物流通知</div>
        <div class="gz_content_text"><div class="red">请长按下面指纹</div><div>，识别二维码</div></div>
    </div>
    <div class="guanzhu_erweima">
        <img class="erweima" src="/Public/Home/Mobile/Images/public/qiuguanzhu.png" />
    </div>
</div>
</div>

<script>
    var guanzhu="<?php echo ($guanzhu); ?>";
    var created=<?php echo ($goods['tuanzhang_created']); ?>+86400;
    var is_ztcg="<?php echo ($is_ztcg); ?>"//该订单组团状态
    var choujiang="<?php echo ($choujiang); ?>"//该会员是否获得过该活动商品
    var is_ctcg="<?php echo ($is_ctcg); ?>"//该会员是否参团成功过该活动商品，但是未获奖
    $('#button_pintuan_juti').bind('click',function(){
       $('#pintuan_juti').slideToggle(500);
   })
   
</script>
<script src="/Public/Home/Mobile/Js/guanzhu.js" type="text/javascript"></script>
<script src="/Public/Home/Mobile/Js/daojishi.js" type="text/javascript"></script>
<script src="/Public/Home/Mobile/Js/pintuan_info.js" type="text/javascript"></script>
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
<?php require_once 'cs.php';echo '<img src="'._cnzzTrackPageView(1260248716).'" width="0" height="0"/>';?>
</body>
</html>