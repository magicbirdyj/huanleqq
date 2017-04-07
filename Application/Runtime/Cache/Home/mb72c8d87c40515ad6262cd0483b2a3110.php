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
<script src="/Public/Common/Js/jquery.form.js"></script> 
</head>

<body>
    <div class="fanhui padding"><a href="javascript:history.back()"><span class="iconfont tb_fanhui"id="shangjia_info_fanhui">&#xe603;</span></a>店铺信息完善</div>
    <div id="infor" class="infor" style="color: #666;display: block"></div>


    <form name="zhuce" method="post" enctype="multipart/form-data" action="<?php echo U('Zhuceshop/zhuce4_check');?>">
         <input name="member_file_touxiang" value="" type="hidden"/> 
<div class="zhuce4_tr">
    <div class="zhuce4_tr_td1" style="height: 35px;line-height: 35px;">上传logo</div>
    <div class="file_jia" id="file_touxiang">+</div>                
</div><!--第一行-->

</div><!--第二行-->
<div  class="xuxian"></div>
<div class="zhuce4_tr">
<div class="zhuce4_tr_td1">店铺形式</div>
<div class="zhuce4_tr_td2">
<input name="radio_fuwuxingshi" type="radio" class="zhuce4_radio" value="0" />普通商品
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input name="radio_fuwuxingshi" type="radio" class="zhuce4_radio" value="1"  />代购
</div>
</div><!--第三行-->
<div class="zhuce4_tr">
    <div class="zhuce4_tr_td1"></div>
    <div class="zhuce4_tr_td2">
<input name="radio_fuwuxingshi" type="radio" class="zhuce4_radio" value="2"  />个人纯手工商品
    </div>
</div>




    
    
<div  class="xuxian"></div>
<div class="zhuce4_tr">
<div class="zhuce4_tr_td1">所在城市</div>
    <select name="address_province" class="zhuce4_tr_td2 zhuce4_select" ></select>
</div><!--第七行-->

<div class="zhuce4_tr">
<div class="zhuce4_tr_td1"></div>
    <select name="address_city" class="zhuce4_tr_td2 zhuce4_select" ></select>
</div><!--第七行-->

<div class="zhuce4_tr">
<div class="zhuce4_tr_td1"></div>
    <select name="address_county" class="zhuce4_tr_td2 zhuce4_select" ></select>
</div><!--第七行-->

<div class="zhuce4_tr">
<div class="zhuce4_tr_td1">详细地址</div>
<input name="address_juti" type="text" class="zhuce4_tr_td2 zhuce4_text"  />
</div><!--第八行-->
<div  class="xuxian"></div>
<div class="zhuce4_tr">
<div class="zhuce4_tr_td1">联系微信</div>
    <input name="contact_weixin" type="text"  class="zhuce4_tr_td2 zhuce4_text"  />

</div><!--第九行-->



<div class="xuxian"></div>
<div class="zhuce4_tr">
    <div class="zhuce4_tr_td1">主营分类</div>
    <select name="cate_0" class="zhuce4_tr_td2 zhuce4_select" ></select>
</div><!--第十行-->
<div class="zhuce4_tr">
<div class="zhuce4_tr_td1"></div>
    <select name="cate_1" class="zhuce4_tr_td2 zhuce4_select" ></select>
</div><!--第九行-->
<div  class="xuxian"></div>

<div class="zhuce4_tr" style="position: relative;">
<div class="zhuce4_tr_td1">店铺介绍</div>  
<textarea id="shop_introduce" name="shop_introduce"  class="zhuce4_text" placeholder="500字以内"></textarea>
</div>

<a href="javascript:void(0)" id="zhuce1_xiayibu" class="a_xyb button_a_lvse">下一步</a>
</form>


    <form id = "form_file_touxiang" enctype="multipart/form-data" action="<?php echo U('Zhuceshop/file_jia');?>" method="post" name="form_file_touxiang">   
        <input name="file_touxiang" type="file"  style="visibility:hidden; width:0px; height: 0px;" />
    </form>
    
    
    
    <script type="text/javascript">
        var arr_cate_0 = new Array();
        var arr_cate_1 = new Array();
        var i,i1;
        arr_cate_0[0]="请选择大类";
        <?php if(is_array($cate_0)): $i = 0; $__LIST__ = $cate_0;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>i=parseInt("<?php echo ($key); ?>");
            arr_cate_0[i+1]="<?php echo ($vo['cat_name']); ?>";<?php endforeach; endif; else: echo "" ;endif; ?>
        arr_cate_1[0]=new Array();
        arr_cate_1[0][0]=new Array();
        <?php if(is_array($cate_1)): $i = 0; $__LIST__ = $cate_1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>i=parseInt("<?php echo ($key); ?>");
              arr_cate_1[i+1]=new Array();
              <?php if(is_array($vo)): foreach($vo as $k=>$value): ?>i1=parseInt("<?php echo ($k); ?>");
                arr_cate_1[i+1][i1]=new Array();<?php endforeach; endif; endforeach; endif; else: echo "" ;endif; ?>
        arr_cate_1[0][0][0]="请选择分类";
        arr_cate_1[0][0][1]="请选择分类";
        <?php if(is_array($cate_1)): $i = 0; $__LIST__ = $cate_1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>i=parseInt("<?php echo ($key); ?>");
            <?php if(is_array($vo)): foreach($vo as $k=>$value): ?>i1=parseInt("<?php echo ($k); ?>");
                arr_cate_1[i+1][i1][0]="<?php echo ($value['cat_id']); ?>";
                arr_cate_1[i+1][i1][1]="<?php echo ($value['cat_name']); ?>";<?php endforeach; endif; endforeach; endif; else: echo "" ;endif; ?>

    </script>    
<script src="/Public/Home/Mobile/Js/zhuce4.js" type="text/javascript"></script>
</body>
</html>

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