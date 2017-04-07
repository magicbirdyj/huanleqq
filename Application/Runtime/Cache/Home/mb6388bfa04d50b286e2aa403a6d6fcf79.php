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
<link rel="stylesheet" type="text/css" href="/Public/Home/Mobile/Css/goods.css">
<link rel="stylesheet" type="text/css" href="/Public/Home/Mobile/Css/buy.css">
</head>

<body>
    <div class="fanhui padding"><a href="<?php echo U('Order/view',array('order_id'=>$order['order_id']));?>"><span class="iconfont tb_fanhui"id="shangjia_info_fanhui">&#xe603;</span></a>下单成功</div>

<table class="buy_table" cellspacing="0">
<tr class="buy_table_head">
    <td colspan="2"><?php echo ($order['goods_name']); ?></td>
</tr>
<tr class="buy_table_content">
    <td class="td_l">应付金额：</td>
    <td class="td_r yingfu">&yen <?php echo (floatval($order['dues'])); ?></td>
</tr>
<form name="qufukuang" method="post" action="<?php echo U('Goods/alipay');?>">
<tr class="buy_table_content">
    <td class="td_l">付款方式：</td>
    <td class="td_r pay_method">
        <select name="pay_method" >
                    <option value="2" >微信支付</option>
            </select>
    </td>
</tr>

</table>
        <input type="hidden" name="order_id" value="<?php echo ($order['order_id']); ?>" />
    </form>
    <a href="javascript:void(0)" class="a_tjdd button_a_lvse" >去付款</a>
</div>

<script type="text/javascript">
    $('.a_tjdd').bind('click',function(){
        $('form[name=qufukuang]').submit();
    })
</script>
  <div class="footer">
      <div class="ui-footer">
                  <a href="<?php echo U('Index/index');?>"><span class=" iconfont foot_home foot_tb">&#xe60f;</span><span>首页</span></a>
                  <a href="<?php echo U('Member/sellection');?>"><span class=" iconfont foot_shoucang foot_tb">&#xe620;</span><span>我的收藏</span></a>
                  <a href="<?php echo U('Order/index');?>"><span class="iconfont foot_pintuan foot_tb">&#xe622;</span><span>我的拼团</span></a>
                  <a href="<?php echo U('Member/index');?>"><span class=" iconfont foot_wode foot_tb">&#xe60a;</span><span>我的酱紫</span></a>
          </div>
  </div> 




</body>
</html>