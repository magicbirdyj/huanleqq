<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <!--
<META HTTP-EQUIV="pragma" CONTENT="no-cache" /> 
<META HTTP-EQUIV="Cache-Control" CONTENT="no-store, must-revalidate" /> 
<META HTTP-EQUIV="expires" CONTENT="Wed, 26 Feb 1997 08:21:57 GMT" /> 
<META HTTP-EQUIV="expires" CONTENT="0" /> 
-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo ($keywords); ?>" />
<meta name="description" content="<?php echo ($description); ?>" />
<link rel="stylesheet" type="text/css" href="/Public/Home/Css/public.css"/>
<script src="/Public/Common/Js/jquery.min.js"></script> 
<script src="/Public/Common/Js/function.js"></script> 
<title><?php echo ($title); ?></title>


 
<link rel="stylesheet" type="text/css" href="/Public/Home/Css/member.css">
<link rel="stylesheet" type="text/css" href="/Public/Admin/Css/release_goods.css">
<script src="/Public/Common/Js/jquery.min.js"></script> 
<script src="/Public/Common/Js/jquery.form.js"></script> 
<script src="/Public/Common/Js/function.js"></script>
</head>
<body>
    <div class="release">
        <div class="div1">
            快递单号填写：
        </div>
        
        <form name="fahuo" method="post" enctype="multipart/form-data" action="<?php echo U('Ordermanage/fahuo_check');?>" >
             <div class="tr">
                <div class="tr_td1">送达方式</div>
                <select name="fangshi" class="tr_td2 release_select title_select" >
                    <option value="1" >同城送达</option>
                    <option value="2" >物流快递</option>
                </select>
            </div>
            <input name="order_id" value="<?php echo ($order_id); ?>" type="hidden"/> 
            <div class="tr">
                <div class="tr_td1" id="row_1">骑手姓名</div>
                <input id="input_1" name="qishou_name" type="text" class="text"   />
                <select class="tr_td2 release_select" id='kuaidi_select' style='display: none;width: auto'>
                    <option value="none">--请选择快递公司--</option>
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
                <span id="info_1"></span>
            </div>
            <div class="tr">
                <div class="tr_td1" id="row_2">骑手电话</div>
                <input id="input_2" name="qishou_mobile" type="text" class="text"   />
                <span id="info_2"></span>
            </div>
        </form>
        <a href="javascript:void(0)" id="xiayibu" class="xyb">我要发货</a>
    </div>

    
    
    
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
                $('#row_2').html('单号');
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
            var a=text_blue($('input[name=qishou_name]'),$('#info_1'),'骑手姓名');
            var b=yz_shouji($('input[name=qishou_mobile]'));
            if(a&&b){
                $('form[name=fahuo]').submit();
            }
            return false;
        }else if($('select[name=fangshi]').val()=='2'){
            var a=kuaidi_select();
            var b=text_blue($('input[name=kuaidi_no]'),$('#info_2'),'快递单号');
            if(a&&b){
                $('form[name=fahuo]').submit();
            }
            return false;
        }
        
    }
    
    
    function kuaidi_select(){
        var val=$('#kuaidi_select').val();
        if(val=='none'){
            $('#info_1').css('color','red');
            $('#info_1').html('请选择快递公司');
            return false;
        }else{
            $('#info_1').html('');
            return true;
        }
    }
    function yz_shouji(obj){
    if(obj.val()===""){
        $('#info_2').css('color','red');
        $('#info_2').html("(骑手电话为空，请输入)");
	return false;
	}else if(!is_shoujihao(obj.val())){
             $('#info_2').css('color','red');
            $('#info_2').html("(不正确，请输入正确的手机号码)");
            return false;
            }else{
                $('#info_2').css('color','#666');
                $('#info_2').html("&radic;");
                return true;
            }
		
    }
    </script>