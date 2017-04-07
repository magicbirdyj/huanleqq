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
</head>

<body>
    <div class="fanhui padding"><a href="<?php echo U('Member/index');?>"><span class="iconfont tb_fanhui"id="shangjia_info_fanhui">&#xe603;</span></a>发货</div>
    <div id="infor" class="infor"></div>
<form name="fahuo"  method="post" action="<?php echo U('Shop/fahuo_check');?>" id="form1" >
    <input name="order_id" value="<?php echo ($order_id); ?>" type="hidden"/> 
    <input name="kuaidi_company" value="" type="hidden"/> 
    <div class="zhuce4_tr">
        <div class="zhuce4_tr_td1">送货方式</div>
        <select name="fangshi" class="zhuce4_tr_td2  zhuce4_select" >
            <option value="2" >物流快递</option>
            <option value="1" >同城送达</option>
        </select>
    </div>
    <div  class="zhuce4_tr">
        <div class="zhuce4_tr_td1" id="row_1">快递公司</div>
        <select name='kuaidi_bianma' class="zhuce4_tr_td2  zhuce4_select" id='kuaidi_select' >
                    <option value="none">——请选择快递公司——</option>
                    <option value="ANE">安能物流</option>
                    <option value="AXD">安信达快递</option>
                    <option value="BFDF">百福东方 </option>
                    <option value="BQXHM">北青小红帽</option>
                    <option value="CCES">CCES快递 </option>
                    <option value="CITY100">城市100</option>
                    <option value="COE">COE东方快递 </option>
                    <option value="CSCY">长沙创一 </option>
                    <option value="DBL">德邦 </option>
                    <option value="DHL">DHL</option>
                    <option value="DSWL">D速物流 </option>
                    <option value="DTWL">大田物流</option>
                    <option value="EMS">EMS</option>
                    <option value="FAST">快捷速递</option>
                    <option value="FEDEX">FedEx联邦快递</option>
                    <option value="FKD">飞康达</option>
                    <option value="GDEMS">广东邮政</option>
                    <option value="GSD">共速达</option>
                    <option value="GTO">国通快递</option>
                    <option value="GTSD">高铁速递</option>
                    <option value="HFWL">汇丰物流</option>
                    <option value="HHTT">天天快递</option>
                    <option value="HLWL">恒路物流</option>
                    <option value="HOAU">天地华宇</option>
                    <option value="hq568">华强物流</option>
                    <option value="HTKY">百世汇通</option>
                    <option value="HXLWL">华夏龙物流</option>
                    <option value="HYLSD">好来运快递</option>
                    <option value="JD">京东快递</option>
                    <option value="JGSD">京广速递</option>
                    <option value="JJKY">佳吉快运</option>
                    <option value="JTKD">捷特快递</option>
                    <option value="JXD">急先达</option>
                    <option value="JYKD">晋越快递</option>
                    <option value="JYM">加运美</option>
                    <option value="JYWL">佳怡物流</option>
                    <option value="LB">龙邦快递</option>
                    <option value="LHT">联昊通速递</option>
                    <option value="MHKD">民航快递</option>
                    <option value="MLWL">明亮物流</option>
                    <option value="NEDA">能达速递</option>
                    <option value="QCKD">全晨快递</option>
                    <option value="QFKD">全峰快递</option>
                    <option value="QRT">全日通快递</option>
                    <option value="SAWL">圣安物流</option>
                    <option value="SDWL">上大物流</option>
                    <option value="SF">顺丰快递</option>
                    <option value="SFWL">盛丰物流</option>
                    <option value="SHWL">盛辉物流</option>
                    <option value="ST">速通物流</option>
                    <option value="STO">申通快递</option>
                    <option value="SURE">速尔快递</option>
                    <option value="TSSTO">唐山申通</option>
                    <option value="UAPEX">全一快递</option>
                    <option value="UC">优速快递</option>
                    <option value="WJWL">万家物流</option>
                    <option value="WXWL">万象物流</option>
                    <option value="XBWL">新邦物流</option>
                    <option value="XFEX">信丰快递</option>
                    <option value="XYT">希优特</option>
                    <option value="YADEX">源安达快递</option>
                    <option value="YCWL">远成物流</option>
                    <option value="YD">韵达快递</option>
                    <option value="YFEX">越丰物流</option>
                    <option value="YFHEX">原飞航物流</option>
                    <option value="YFSD">亚风快递</option>
                    <option value="YTKD">运通快递</option>
                    <option value="YTKD">安能物流</option>
                    <option value="YTO">圆通速递</option>
                    <option value="YZPY">邮政快递</option>
                    <option value="ZENY">增益快递</option>
                    <option value="ZHQKD">汇强快递</option>
                    <option value="ZJS">宅急送</option>
                    <option value="ZTE">众通快递</option>
                    <option value="ZTKY">中铁快运</option>
                    <option value="ZTO">中通速递</option>
                    <option value="ZTWL">中铁物流</option>
                    <option value="ZYWL">中邮物流</option>
        </select>  
        <input id="input_1" name="qishou_name" type="text" class="zhuce4_tr_td2 zhuce4_text"  style='display: none;' />       
    </div>    


          
<div class="zhuce4_tr">
<div class="zhuce4_tr_td1" id="row_2">快递单号</div>
<input id="input_2" name="kuaidi_no" type="text" class="zhuce4_tr_td2 zhuce4_text"  />
</div>        
        
       

<a href="javascript:void(0)" id="xiayibu" class="a_tjdd button_a_lvse" style='margin-top: 20px;' >发货</a>
</form>
    
    
    
 
    
    
   

<script>
        function select_change(){
            if($('select[name=fangshi]').val()=='1'){
                $('#row_1').html('骑手姓名');
                $('#row_2').html('骑手电话');
                $('#kuaidi_select').css('display','none');
                $('#input_1').css('display','inline-block');
                $('#info_1').html('');
                $('#info_2').html('');
                $('#input_2').attr('name','qishou_mobile');
                bind_1();
            }else if($('select[name=fangshi]').val()=='2'){
                $('#row_1').html('快递公司');
                $('#row_2').html('快递单号');
                $('#input_1').css('display','none');
                $('#kuaidi_select').css('display','inline-block');
                $('#info_1').html('');
                $('#info_2').html('');
                $('#input_2').attr('name','kuaidi_no');
                bind_2();
            }
        }
        
        $('select[name=fangshi').bind('change',function(){
            select_change();
        });
        bind_1();
        function bind_1(){
            $(':text[name=qishou_name]').bind('focus',function(){text_focus($('#info_1'),'填写送货骑手姓名');});
            $(':text[name=qishou_name]').bind('blur',function(){text_blue($(this),$('#info_1'),'骑手姓名');});
            $(':text[name=qishou_mobile]').bind('focus',function(){text_focus($('#info_2'),'填写骑手电话');});
            $(':text[name=qishou_mobile]').bind('blur',function(){yz_shouji($('input[name=qishou_mobile]'));});
        }

        function bind_2(){
            $('#kuaidi_select').bind('change',function(){kuaidi_select();});
            $(':text[name=kuaidi_no]').bind('focus',function(){text_focus($('#info_2'),'填写发货的快递单号,同城送达填写0');});
            $(':text[name=kuaidi_no]').bind('blur',function(){text_blue($(this),$('#info_2'),'快递单号');});
        }
        
        
    
    $('#xiayibu').bind('click',function(){fabu();});
        
        
        
        
    function fabu(){
        if($('select[name=fangshi]').val()=='1'){
            var a=text_blue($('input[name=qishou_name]'),$('#infor'),'骑手姓名');
            var b=yz_shouji($('input[name=qishou_mobile]'));
            if(a&&b){
                $('form[name=fahuo]').submit();
            }
            return false;
        }else if($('select[name=fangshi]').val()=='2'){
            var b=text_blue($('input[name=kuaidi_no]'),$('#infor'),'快递单号');
            var a=kuaidi_select();
            if(a&&b){
                $('form[name=fahuo]').submit();
            }
            return false;
        }
        
    }
    
    
    function kuaidi_select(){
        var val=$('#kuaidi_select').val();
        if(val=='none'){
            $('#infor').css('display','block');
            setTimeout(infor_none,3000);
            $('#infor').css('color','red');
	    $('#infor').html("请选择快递公司");
            return false;
        }else{
            $(':hidden[name=kuaidi_company]').val($('#kuaidi_select').find("option:selected").html());
            return true;
        }
    }
    function yz_shouji(obj){
    if(obj.val()===""){
        $('#infor').css('display','block');
        setTimeout(infor_none,3000);
        $('#infor').css('color','red');
        $('#infor').html("(骑手电话为空，请输入)");
	return false;
	}else if(!is_shoujihao(obj.val())){
            $('#infor').css('display','block');
            setTimeout(infor_none,3000);
            $('#infor').css('color','red');
            $('#infor').html("(不正确，请输入正确的手机号码)");
            return false;
            }else{
                return true;
            }
		
    }
    </script>



  <div class="footer">
      <div class="ui-footer">
                  <a href="<?php echo U('Index/index');?>"><span class=" iconfont foot_home foot_tb">&#xe60f;</span><span>首页</span></a>
                  <a href="<?php echo U('Member/sellection');?>"><span class=" iconfont foot_shoucang foot_tb">&#xe620;</span><span>我的收藏</span></a>
                  <a href="<?php echo U('Order/index');?>"><span class="iconfont foot_pintuan foot_tb">&#xe622;</span><span>我的订单</span></a>
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