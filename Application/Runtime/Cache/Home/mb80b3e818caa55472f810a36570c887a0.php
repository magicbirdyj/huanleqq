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
<link rel="stylesheet" type="text/css" href="/Public/Home/Mobile/Css/order.css">
</head>

<body>
    <div class="fanhui padding"><a href="<?php echo U('Member/index');?>"><span class="iconfont tb_fanhui"id="shangjia_info_fanhui">&#xe603;</span></a>店铺商品</div>
    <div class="dingdan">
        <div class='dingdan_4'>
            <ul>
                <li>
                    <a href="<?php echo U('Shop/goods?status=0');?>">
                    <div class='dingdan_fenkai_tb_div'>
                        <span class="iconfont tb_dingdan_li" style='font-size: 28px;'>&#xe628;</span>
                        <span style='margin-left: 2px;' class="right_up_tb"><?php echo ($status_count['0']); ?></span>
                    </div>
                    <div><span>上架商品</span></div>
                    </a>
                </li>
                <li>
                    <a href="<?php echo U('Shop/goods?status=1');?>">
                    <div class='dingdan_fenkai_tb_div'>
                        <span class="iconfont tb_dingdan_li" style='font-size: 28px;'>&#xe62a;</span>
                        <span style='margin-left: 2px;' class="right_up_tb"><?php echo ($status_count['1']); ?></span>
                    </div>
                    <div><span>下架商品</span></div>
                    </a>
                </li>
                
            </ul>
        </div>
    </div>


        
        
       
 
        
        
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a  href="<?php echo U('Goods/index',array('goods_id'=>$vo['goods_id']));?>"><!--内容遍历-->
                <div class="order_row">
                <div class='td_l'>
                    <div class="picture"><img src="<?php echo ($vo['goods_img']); ?>"></div>
                </div>
                <div class="td_r">
                    <div class="info_name shenglue"><?php echo ($vo['goods_name']); ?></div>
                    <div class="info_name shenglue">销量：<?php echo ($vo['buy_number']); ?></div>
                    <div class="info_name shenglue">创建时间：<?php echo (date('Y-m-d  H:m:s',$vo['add_time'])); ?></div>
                    <div class='info_name'><span>价格：&yen;<?php echo ($vo['price']); ?></span><span style="margin-left: 20px;">红包：&yen;<?php echo ($vo['fanxian']); ?></span></div>
                </div>
                </div>
            </a>
            <div class='action'>
                <a  class="button_a_order"  href="<?php echo U('Shop/bianji_goods',array('goods_id'=>$vo['goods_id']));?>">编辑商品</a>
                    <?php if($vo['is_delete'] == '0'): ?><a  class="button_a_order goods_xiajia" name='<?php echo ($vo["goods_id"]); ?>'  href="javascript:void(0)">商品下架</a><?php endif; ?>
                    <?php if($vo['is_delete'] == '1'): ?><a  class="button_a_order goods_shangjia" name='<?php echo ($vo["goods_id"]); ?>'   href="javascript:void(0)">商品上架</a><?php endif; ?>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
        
   
        
        

        

<script type="text/javascript">
    var canshu="<?php echo ($canshu); ?>";
    if(canshu==='1'){
        $('.dingdan_4>ul>li:eq(1)').css('background-color','#f90');
        $('.dingdan_4>ul>li:eq(1)>a>div').css('background-color','#f90');
        $('.dingdan_4>ul>li:eq(1) *').css('color','#fff');
    }else{
        $('.dingdan_4>ul>li:eq(0)').css('background-color','#f90');
        $('.dingdan_4>ul>li:eq(0)>a>div').css('background-color','#f90');
        $('.dingdan_4>ul>li:eq(0) *').css('color','#fff');
    }
    
    
    
    $('.goods_xiajia').bind('click',function(){
        if(confirm("确定要下架该商品吗？")){
            var url='/Home/Ajaxlogin/goods_xiajia.html';
            var data={
                    goods_id:$(this).attr('name'),
                    check:"xiajia"
                }
            $.ajax({
                    type:'post',
                    async : false,
                    url:url,
                    data:data,
                    datatype:'json',
                    success:function(msg){
                        if(msg){ 
                            location=location;                        
                        }else{
                            alert('下架商品失败'); 
                        }
                    }
                });    
        }
    });
    $('.goods_shangjia').bind('click',function(){
        event.preventDefault();
        if(confirm("确定要上架该商品吗？")){
            var url='/Home/Ajaxlogin/goods_shangjia.html';
            var data={
                    goods_id:$(this).attr('name'),
                    check:"shangjia"
                };
            $.ajax({
                    type:'post',
                    async : false,
                    url:url,
                    data:data,
                    datatype:'json',
                    success:function(msg){
                        if(msg){ 
                            location=location;                        
                        }else{
                            alert('上架商品失败'); 
                        }
                    }
                }); 
        }
    });
    
    
</script>



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