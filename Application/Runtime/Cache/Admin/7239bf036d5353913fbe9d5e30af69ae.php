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
<script src="/Public/Common/Js/jquery.min.js"></script> 
<script src="/Public/Common/Js/function.js"></script> 
<script src="/Public/Common/Js/jquery.form.js"></script> 
<script src="/Public/Common/Js/kindeditor/kindeditor.js"></script>
<script src="/Public/Common/Js/kindeditor/lang/zh_CN.js"></script>
</head>
<body>
    
    <div style="font-size: 16px;margin: 20px 200px;">详情编辑--轮播<?php echo ($data['position']==='轮播上'?'上':'下'); ?>（<?php echo ($xuhao); ?>）</div>
    <form name="advert_xqbj" method="post" enctype="multipart/form-data" action="<?php echo U('Advert/xqbj_check');?>">
        <input name='xuhao' value="<?php echo ($xuhao); ?>" type="hidden" />
    <div style="margin: 0px 0px 20px 30px;" >
    <textarea id="content" name="content" style="width:90%;height:300px;visibility:hidden;">
                    <?php echo ($data['advert_desc']); ?>
    </textarea>
    </div>
    <input type="submit" value="确定发布" style="margin: 20px 0px 50px 30px;" />
    </form>
    <script src="/Public/Admin/Js/kindeditor.js" type="text/javascript"></script>
</body>
</html>