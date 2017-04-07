<?php if (!defined('THINK_PATH')) exit();?>
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

<link rel="stylesheet" type="text/css" href="/Public/Home/Mobile/Css/public.css"/>
<link rel="stylesheet" type="text/css" href="/Public/Home/Mobile/Css/head.css"/>
<link rel="stylesheet" type="text/css" href="/Public/Home/Mobile/Css/footer_buy.css">

<script src="/Public/Common/Js/jquery.min.js"></script> 
<script src="/Public/Common/Js/function.js"></script>
<script src="/Public/Home/Mobile/Js/UC_jinzhisuofang.js"></script>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<title><?php echo ($title); ?></title>


<link rel="stylesheet" type="text/css" href="/Public/Home/Mobile/Css/iconfont/iconfont_guopin/iconfont.css">
<link rel="stylesheet" type="text/css" href="/Public/Home/Mobile/Css/lunbo.css">
<link rel="stylesheet" type="text/css" href="/Public/Home/Mobile/Css/goods.css">
</head>
<body>
    <div class="big_div">
    <div style="width:100%;background-color: #f0efed;" id="shop">
        <a href="javascript:history.back()" class="goods_fanhui iconfont tb_fanhui">&#xe61e;</a>
    <div class="lunbo_div" id="lunbo_div" >
          <?php if(is_array($img_qita)): $i = 0; $__LIST__ = $img_qita;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="javascript:void(0)"><img class="lunbo_img" src="<?php echo ($vo); ?>" /></a><?php endforeach; endif; else: echo "" ;endif; ?> 
          <?php if(is_array($img_qita)): $i = 0; $__LIST__ = $img_qita;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="javascript:void(0)"><img class="lunbo_img" src="<?php echo ($vo); ?>" /></a><?php endforeach; endif; else: echo "" ;endif; ?> 


      </div>
    
      <div class="choose">
          <div class="choose_div">
          </div>
      </div>
         <div class="price">
        <div class="price_l">
            <strong class="price_strong price_red"><?php echo ($goods['price']); ?></strong>
            <span class="price_red" style="margin-left: -2px;">元</span>
            <del class="yuan_price">原价:<?php echo ($goods['yuan_price']); ?>元</del>
        </div>
        <div class="price_r">
            <?php if($goods['1yuangou'] == '1'): ?><span class="daijinquan" style="margin-left: 5px;">1元购</span><?php endif; ?>
                <?php if($goods['choujiang'] == '1'): ?><span class="daijinquan">抽奖</span><?php endif; ?>
        </div>
    </div>
    <div class="titile"><?php echo ($goods['goods_name']); ?></div>
    <div class="title1_1" id="title1_1"><?php echo ($goods['goods_jianjie']); ?></div>
    <?php if(($goods['1yuangou'] == 1) and ($goods['choujiang'] == 1)): ?><div class="title1_1" id="huodong_guize">
            <p>抽奖规则</p>
            <p>1、拼团成功后，团长将获得1元购活动商品，再从该团的团员中随机抽取一名获得1元购商品。</p>
            <p>2、未中奖的团员全额退款，并赠送88元代金券。</p>
            <p>3、未中奖的团员可自己开团，但不能再参团，拼团成功的团长和已中奖的团员不能重复参加该活动</p>
            <p style="color:red">备注：该活动暂时只支持送货地区为冷水江市市区</p>
        </div><?php endif; ?>
   
    <div class="jianjie" >
        <div class="sjcn">酱紫承诺</div>
         <div class="chengnuo_content">
             <a href="javascript:void(0)">
             <div class="iconfont tb_chengnuo">&#xe62e;</div>
             <div>包邮</div>
             </a>
             <a href="javascript:void(0)">
             <div class="iconfont tb_chengnuo">&#xe62e;</div>
             <div>不满意退</div>
             </a>
             <a href="javascript:void(0)" style="margin-right: 0px;">
                 <div class="iconfont tb_chengnuo">&#xe62e;</div>
                 <div>品质保证</div>
             </a>
         </div>
    </div>
    <div class="about">
        <div>已售：<span><?php echo ($goods['buy_number']); ?></span></div>
        <div><a class="maodian_pingjia" href="<?php echo U('Goods/index',array('goods_id'=>$goods['goods_id'])).'#maodian_pingjia';?>"><span><?php echo ($goods['score']); ?></span>分</a></div>
        <div id="pingjia"><a class="maodian_pingjia" href="<?php echo U('Goods/index',array('goods_id'=>$goods['goods_id'])).'#maodian_pingjia';?>"><span><?php echo ($goods['comment_number']); ?></span>人评价</a></div>
    </div>
    <!--
    <div class="about back_f0">
             <div class='back_f0'>
                 描述：<span><?php echo ($pingfen_fl[0]); ?></span>
             </div>
             <div class='back_f0'>
                 服务：<span><?php echo ($pingfen_fl[1]); ?></span>
             </div>
             <div class='back_f0'>
                 物流：<span><?php echo ($pingfen_fl[2]); ?></span>
             </div>
         
    </div>
    <-->
    
    <!--
    <div style="padding: 7px 10px;font-size: 14px;margin-top: 10px;">支付开团并邀请 <?php echo ($goods['tuan_number']-1); ?> 人开团，人数不足自动退款</div>
    <?php if($goods_tuan != NULL): ?><div style="padding: 10px 10px;font-size: 14px;background-color: #f0f0f0;">以下小伙伴正在发起团购，您可以直接参与</div>
    <div class="all_pintuan">
        <ul>
            <?php if(is_array($goods_tuan)): $i = 0; $__LIST__ = $goods_tuan;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                <a href='<?php echo U("Goods/pintuan_info",array("tuan_no"=>$vo["tuan_no"]));?>'>
                <div class="div_0">
                <img src="<?php echo ($vo['head_url']); ?>" />
                <div class="div0_1">
                    <div style="margin-bottom: 5px;" class="shenglue"><?php echo ($vo['user_name']); ?></div>
                    <div class="shenglue"><?php echo get_address_city(get_order_address($vo['address'],$vo['order_address'])['location']);?></div>
                </div>
                <div class="div0_2">
                    <div style="margin-bottom: 5px;" class='price_red'>还差<?php echo ($vo['count']); ?>人成团</div>
                    <div>剩余<span id='hours_<?php echo ($i); ?>'>24</span>:<span id='minutes_<?php echo ($i); ?>'>60</span>:<span id='seconds_<?php echo ($i); ?>'>60</span>结束</div>
                </div>
                </div>
                <div class="div1">
                    去参团
                </div>
                </a>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div><?php endif; ?>
    -->
    
    
    <a name="shop_a" id="shop_a" style="height: 0px;position:absolute;">&nbsp;</a>
    <div class="shop_div">
    <div class="content_title"><ul>
            <li class="spxq">服务详情</li>
            <li class="ljpj">累计评价</li>
        </ul></div>
    <div id="spxq">
    <div class="goods_shuxing">
        <a class="shop" href="<?php echo U('Shop/index',array('shop_id'=>$shop['shop_id']));?>">
            <img class="shop_head_img" src="<?php echo ($shop['head_url']); ?>" />
            <div class='shop_info'>
                <div class='shop_info_name'><?php echo ($goods['shop_name']); ?><span style="margin-left: 10px;font-weight: normal;font-size: 14px;">[<?php echo ($shop['status']==0?'自营':'入驻商家'); ?>]</span></div>
                <div class='shop_info_sale'>销量：<?php echo ($shop['sale_number']); ?></div>
            </div>
            <div class='shop_right'><span class='iconfont tb_shop_right'>&#xe63a;</span>进店逛逛</div>
        </a>
        <div class="shuxing_title">产品属性：</div>
        <div class="shuxing">
        <ul>
            <?php if(is_array($shuxing)): $i = 0; $__LIST__ = $shuxing;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><?php echo ($key); ?> ：<?php echo ($vo); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        </div>
    </div>
    <div class="goodscontent"><?php echo ($goods['goods_desc']); ?></div>
    </div>
    <div class="pinglun">
        <div class="zhengtifenshu">
            <div>
            <span class="zhengtipingjia">整体评价:</span>
            <span class="score"><?php echo ($goods['score']); ?></span><span class="fen">分</span>
            </div>
            <div style="margin-top: 10px;">
            <span class="shopping_pingjia"><span class="pingjia_limian" style="width: <?php echo (xingxing_baifenbi($goods['score'])); ?>;"></span></span>共<strong><?php echo ($goods['comment_number']); ?></strong>人评价
            </div>
        </div>
        <div class="leijipinglun">
            <ul id='leijipinglun'>
                <?php if(is_array($list_pinglun)): $i = 0; $__LIST__ = $list_pinglun;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                    <div class="pinglun_left"><img src="<?php echo ($vo['head_url']); ?>" class="img"><p class="user_name"><?php echo ($vo['user_name']); ?></p></div>
                    <div class="pinglun_right">
                        <div class="xingxing_div">
                            <span class="pingjia_xiao"><span class="pingjia_xiao_limian" style="width:<?php echo (xingxing_baifenbi($vo['score'])); ?>;"></span></span>
                            <span><?php echo (date("Y-m-d H:i:s",$vo['updated'])); ?></span>
                        </div>
                        <div class="pinglun_text"><?php echo ($vo['appraise']); ?></div>
                    </div>
                    <ul class="pinglun_img">
                            <?php if(is_array($vo['appraise_img'])): foreach($vo['appraise_img'] as $k=>$value): ?><li><img src="<?php echo ($value); ?>" /></li><?php endforeach; endif; ?>
                        </ul>   
                </li><?php endforeach; endif; else: echo "" ;endif; ?>                 
            </ul>

        </div>
    </div>
    </div>
     
    </div>
       
        
        
  
        </div>
        <form name="kaituan_buy" action="<?php echo U('Goods/kaituan_buy');?>" method="get">
            <input name="goods_id" type="hidden" value="<?php echo ($goods_id); ?>" />
            <?php if($zx_shuxing != false): ?><input name="zx_shuxing" type="hidden" value="" /><?php endif; ?>
        </form>
        <form name="dandu_buy" action="<?php echo U('Ajaxnologin/buy_tiaozhuan');?>" method="get" data-ajax="false">
            <input name="goods_id" type="hidden" value="<?php echo ($goods_id); ?>" />
            <?php if($zx_shuxing != false): ?><input name="zx_shuxing" type="hidden" value="" /><?php endif; ?>
        </form>

        
        
       
   <div id="fixed_tishi">无法购买该商品</div>
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
        <a class="button_a_lvse" href="javascript:void(0)" style='position: absolute;bottom:10px;' id='shuxing_queding'>确定</a>
    </div><?php endif; ?>
<script src="/Public/Home/Mobile/Js/goods_lunbo.js" type="text/javascript"></script>
<script src="/Public/Home/Mobile/Js/goods.js" type="text/javascript"></script>




  <div class="footer">
      <div class="ui-footer">
          <a href="<?php echo U('Index/index');?>" class="xiao_a"><span class=" iconfont foot_home foot_tb">&#xe60f;</span><span>首页</span></a>
                  <?php if($is_sellect == null): ?><a href="javascript:void(0)" id='shoucang' class="xiao_a"><span class=" iconfont foot_shoucang foot_tb">&#xe620;</span><span>收藏</span></a>
                  <?php else: ?>
                  <a href="javascript:void(0)" id='yishoucang' class="xiao_a"><span class=" iconfont foot_shoucang foot_tb" style="color:#f90">&#xe620;</span><span>已收藏</span></a><?php endif; ?>
          <a href='tel://<?php echo ($shop["tel"]); ?>' class="xiao_a" style="border-right: none" id='kefu'><span class=" iconfont foot_tel foot_tb">&#xe607;</span><span>客服</span></a>
                  <a href="javascript:void(0)" class="back_color_buy" id='dandu_buy'><span class="foot_buy foot_tb">&yen;<?php echo ($goods['price']); ?></span><span class="color_FFF">立即购买</span></a>
          </div>
  </div> 




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

<script>
    var guanzhu="<?php echo ($guanzhu); ?>";
    var is_get="<?php echo ($is_get); ?>"//该会员是否已经获取过1元购商品的资格
    var tuan_number="<?php echo ($goods['tuan_number']); ?>";
    wx.config({  
        //debug: true, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
        appId: "<?php echo ($wx_config['appId']); ?>", // 必填，公众号的唯一标识
        timestamp: "<?php echo ($wx_config['timestamp']); ?>", // 必填，生成签名的时间戳
        nonceStr: "<?php echo ($wx_config['nonceStr']); ?>", // 必填，生成签名的随机串
        signature: "<?php echo ($wx_config['signature']); ?>",// 必填，签名，见附录1
        jsApiList: ['onMenuShareTimeline','onMenuShareAppMessage','onMenuShareQQ','onMenuShareQZone'] // 必填，需要使用的JS接口列表，所有JS接口列表见附录2
    });
</script>
<script src="/Public/Home/Mobile/Js/guanzhu.js" type="text/javascript"></script>
<script src="/Public/Home/Mobile/Js/foot_buy.js" type="text/javascript"></script>
<script src="/Public/Home/Mobile/Js/new_order.js" type="text/javascript"></script>
<script src="/Public/Home/Mobile/Js/weixin_config.js" type="text/javascript"></script>
<?php if($goods_tuan != NULL): ?><script>
    ///倒计时
    var timestamp = (Date.parse(new Date()))/1000;
    <?php if(is_array($goods_tuan)): $i = 0; $__LIST__ = $goods_tuan;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>var created_<?php echo ($i); ?>=<?php echo ($vo['created']); ?>+86400;
    var  maxtime_<?php echo ($i); ?> = created_<?php echo ($i); ?>-timestamp;
    var timer_<?php echo ($i); ?> = setInterval("CountDown(maxtime_<?php echo ($i); ?>,'hours_<?php echo ($i); ?>','minutes_<?php echo ($i); ?>','seconds_<?php echo ($i); ?>')",1000);<?php endforeach; endif; else: echo "" ;endif; ?>
function CountDown(maxtime,id_hours,id_minutes,id_seconds){   
    if(maxtime>=0){
        hours=(Math.floor((maxtime/60)/60)<10?'0'+Math.floor((maxtime/60)/60):Math.floor((maxtime/60)/60));
        minutes =  (Math.floor((maxtime/60)%60)<10?'0'+Math.floor((maxtime/60)%60):Math.floor((maxtime/60)%60));
        seconds = (Math.floor(maxtime%60)<10?'0'+Math.floor(maxtime%60):Math.floor(maxtime%60)); 
        $('#'+id_hours).html(hours);
        $('#'+id_minutes).html(minutes);
        $('#'+id_seconds).html(seconds);
        if(maxtime==maxtime_1){
            maxtime_1--;
        }else{
            maxtime_2--;
        }
    }else{
        if(maxtime==maxtime_1){
            clearInterval(timer_1);
        }else{
            clearInterval(timer_2);
        }
        document.URL=location.href;
    }
};
</script><?php endif; ?>
<?php require_once 'cs.php';echo '<img src="'._cnzzTrackPageView(1260248716).'" width="0" height="0"/>';?>
</body>
</html>