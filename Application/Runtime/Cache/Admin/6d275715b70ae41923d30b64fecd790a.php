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


 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="/Public/Home/Css/public.css"/>
<link type="text/css" rel="stylesheet" href="/Public/Admin/Css/manger.css" />
<script src="/Public/Common/Js/jquery.min.js"></script> 
<script src="/Public/Common/Js/function.js"></script> 
<script src="/Public/Common/Js/jquery.form.js"></script> 
</head>
<body>
    <div class="inof_div">
        <div class="title">添加分类</div>
        <form  name="tianjia_fenlei"  method="post"   action="<?php echo U('Category/tianjia_check');?>">
            <input name='cat_id' type="hidden" value="<?php echo ($cat['cat_id']); ?>" />
            <div class="tr">
                <div class="tr_td1">分类名称</div>
                <input name="cat_name" class="tr_td2 release_select" type='text' style="width: 200px;" value="<?php echo ($cat['cat_name']); ?>" />
            </div>
            <div class="tr">
                <div class="tr_td1"> 上级分类</div>
                <select name="pid" class="tr_td2 release_select" >
                    <option value='0'>顶级分类</option>
                    <?php if(is_array($yiji_fenlei)): $i = 0; $__LIST__ = $yiji_fenlei;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['cat_id']); ?>" ><?php echo ($vo['cat_name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </div>
            
            <div class="tr" style="margin-top: 30px;">
            <input type="submit" value='确定' style="margin-left: 60px;" class="input_button" id='qd' />
        </div>
        </form>
    </div>
   
    
    <script>
    //上级分类赋值
    var shangji_id="<?php echo ($cat['pid']); ?>";
    $('select[name=pid]>option[value='+shangji_id+']').attr('selected','selected');
    </script>    
<script src="/Public/Admin/Js/tianjia_fenlei.js" type="text/javascript"></script>
</body>
</html>