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
<link rel="stylesheet" type="text/css" href="/Public/Home/Mobile/Css/release_goods.css">
<script src="/Public/Common/Js/jquery.form.js"></script> 
<script src="/Public/Common/Js/kindeditor_mobile/kindeditor.js"></script>
<script src="/Public/Common/Js/kindeditor_mobile/lang/zh_CN.js"></script>
</head>

<body>
    <div id="infor" class="infor"></div>
    <form id = "form_file_jia_zhanshitu" enctype="multipart/form-data" action="<?php echo U('Shop/file_jia','name=file_img_zhanshitu&width=50&height=50');?>" method="get" style="visibility:hidden; width:0px; height: 0px;" >   
        <input name="file_img_zhanshitu" type="file"  style="visibility:hidden; width:0px; height: 0px;" />
    </form>
    <form id = "form_file_jia" enctype="multipart/form-data" action="<?php echo U('Shop/file_jia','name=file_img&width=43.5&height=23.2');?>" method="get" style="visibility:hidden; width:0px; height: 0px;">   
        <input name="file_img" type="file" id="file_img" style="visibility:hidden; width:0px; height: 0px;" />
    </form>
    <div class="release">
        <div class="fanhui padding" id='fanhui_1'><a href="<?php echo U('Member/index');?>"><span class="iconfont tb_fanhui"id="shangjia_info_fanhui">&#xe603;</span></a>发布商品</div>
        <div id="infor" class="infor" style="color: #666;"></div>
 
        <form name="release_goods" method="post" enctype="multipart/form-data" action="<?php echo U('Shop/release_check');?>" onsubmit="editor.sync()">
            <input name="goods_zhanshitu" value="" type="hidden"/> 
            <input name="goods_img" value="" type="hidden"/> 
            <div class="tr">
                <div class="tr_td1">商品大类</div>
                <div class="tr_td2">
                <select name="cate_0" class="release_select" ></select>
                </div>
            </div>
            <div class="tr">
                <div class="tr_td1">商品分类</div>
                <div class="tr_td2">
                <select name="cate_1" class="release_select" ></select>
                </div>
            </div>
            <div class='xuxian'></div>
            <div class="tr">
                <div class="tr_td1">商品标题</div>
                <div class="tr_td2">
                <input name="title" type="text" class="text"  />
                <span id="info_title"></span>
                </div>
            </div>
            <div class='xuxian'></div>
            <div class="tr">
                <div class="tr_td1">商品简介</div>
            </div>
            <textarea name="goods_jianjie"  class="goods_jianjie"></textarea>
            <div class='xuxian'></div>
             <div class="tr">
                <div class="tr_td1">单位规格</div>
                <div class="tr_td2">
                <input name="units" type="text" class="text" placeholder="1个（500g）" />
                </div>
            </div>
            <div class='xuxian'></div>
            
            <div  class="tr" id="insert_img">
                <div class="tr_td1" >展示图</div>
                <div class="tr_td2" style='height: 45px;line-height: 45px;margin: 15px 0px;'>
                <div class="file_jia" id="file_jia_zhanshitu">+</div>                
                <span id="span_touxiang"></span>
                <span class="file_tishi">(长宽比300：300)</span>
                </div>
            </div>

            <div class='xuxian'></div>
            

            <div  class="tr" id="insert_img">
                <div class="tr_td1" >商品图<i style="margin-left: 3px;">(<i id="img_count">0</i>/4)</i></div>
                <div class="tr_td2" style='height: 45px;line-height: 45px;margin: 15px 0px;'>
                <div class="file_jia" id="file_jia">+</div>                
                <span id="span_touxiang"></span>
                <span class="file_tishi">(长宽比750：400)</span>
                </div>
            </div>

            <div class='xuxian'></div>
               
            

            <div class="tr">
                <div class="tr_td1">乐享价</div>
                <div class="tr_td2">
                <input name="price" type="text" class="text price_text"  />
                <span style="font-size: 14px;">元</span>
                <span id="info_price"></span>
                </div>
            </div>
<div class='xuxian'></div>
            <div class="tr">
                <div class="tr_td1">原价</div>
                <div class="tr_td2">
                <input name="yuan_price" type="text" class="text price_text"  />
                <span style="font-size: 14px;">元</span>
                <span id="info_yuan_price"></span>
                </div>
            </div>
            <div class='xuxian'></div>
             <div class="tr">
                <div class="tr_td1">乐享红包</div>
                <div class="tr_td2">
                <input name="fanxian" type="text" class="text price_text" placeholder="请输入1-200之间的金额" />
                <span style="font-size: 14px;">元</span>
                </div>
            </div>
<div class='xuxian'></div>
            <div class='xuxian' id="shuxing_xuxian"></div>
            
            
            <div class="tr" style="text-align: center;">
            <input type="button" value='增加商品属性' class="input_button" id='add_sx' /> 
            </div>

            <div style="width:400px;height:0px;border-top:1px dashed #666;"></div>
            <!--
            <div class="tr">
                <div class="tr_td1">参加代金券</div>
                <div class="tr_td2">
                    <input name="radio_daijinquan" type="radio" class="radio" value="1" checked="checked" />是
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <input name="radio_daijinquan" type="radio" class="radio" value="0" />否
                    <a href="<?php echo U('Company/index','name=daijinquan');?>" id="daijinquan_help" class='help'>查看详情</a>
                </div>
            </div>
            <div class='xuxian' style="display: none;"></div>
            -->

            
            <a href="javascript:void(0)" id="xiayibu" class="xyb button_a_lvse">下一步</a>
            
            <div  id='spms'>
                <div class="fanhui padding" id='fanhui_2'><a href="jiavascript:void(0)"><span class="iconfont tb_fanhui"id="shangjia_info_fanhui">&#xe603;</span></a>商品详情</div>
                <div class="tr" id="bianjiqi">
                    <textarea id="content" name="content" style="width:90%;height:300px;visibility:hidden;">
                    
                    </textarea>
      
                </div>
                
                <a href="javascript:void(0)" id="fabu" class="xyb button_a_lvse">立刻发布</a>
      
            </div>
            
            
            
        </form>
    </div>
    
    
    
 <script type="text/javascript">
        var arr_cate_0 = new Array();
        var arr_cate_1 = new Array();
        var i,i1;
        var default_cat_0="<?php echo ($default_cat_0); ?>";
        var default_cat_id="<?php echo ($shop['default_cat_id']); ?>";
        arr_cate_0[0]= new Array();
        arr_cate_0[0][0]="请选择大类";
        arr_cate_0[0][1]="请选择大类";
        <?php if(is_array($cate_0)): $i = 0; $__LIST__ = $cate_0;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>i=parseInt("<?php echo ($key); ?>");
            arr_cate_0[i+1]=new Array();<?php endforeach; endif; else: echo "" ;endif; ?>
        <?php if(is_array($cate_0)): $i = 0; $__LIST__ = $cate_0;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>i=parseInt("<?php echo ($key); ?>");
            arr_cate_0[i+1][0]="<?php echo ($vo['cat_name']); ?>";
            arr_cate_0[i+1][1]="<?php echo ($vo['cat_id']); ?>";<?php endforeach; endif; else: echo "" ;endif; ?>
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
<script src="/Public/Home/Mobile/Js/release_goods.js" type="text/javascript"></script>


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