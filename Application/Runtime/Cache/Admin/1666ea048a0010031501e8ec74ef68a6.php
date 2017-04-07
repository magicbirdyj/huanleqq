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
<link type="text/css" rel="stylesheet" href="/Public/Admin/Css/manger.css" />
<script src="/Public/Common/Js/jquery.min.js"></script> 
<script src="/Public/Common/Js/jquery.form.js"></script> 
<script src="/Public/Common/Js/function.js"></script>
<script src="/Public/Common/Js/kindeditor/kindeditor.js"></script>
<script src="/Public/Common/Js/kindeditor/lang/zh_CN.js"></script>
</head>

<body>
    <div class="release">
        <div class="div1">
            文章发布：
        </div>

        <form name="release_news" method="post"  action="<?php echo U('News/release_check');?>" onsubmit="editor.sync()">
            <input name="goods_zhanshitu" value="" type="hidden"/> 
            
            <div style="width:400px;height:0px;border-top:1px dashed #666;"></div>
            <div class="tr">
                <div class="tr_td1">文章标题</div>
                <input name="title" type="text" class="text"  />
                <span id="info_title"></span>
            </div>
            
            <div style="width:400px;height:0px;border-top:1px dashed #666;"></div>
            
            <div  class="tr" id="insert_img_one">
                <div class="tr_td1" style="height: 35px;line-height: 35px;">文章图片</div>
                <div class="file_jia" id="file_jia_zhanshitu">+</div>                
                <span id="span_zhanshitu"></span>
                <span class="file_tishi">(最大5M)</span>
            </div>

        
        
           
            <div style="width:400px;height:0px;border-top:1px dashed #666;"></div>
            <div class="tr">
                <div class="tr_td1">文章正文</div>
            </div>
            <div class="tr">
                <textarea id="content" name="content" style="width:90%;height:300px;visibility:hidden;">
                    
                </textarea>
      
            </div>
            
            
            <a href="javascript:void(0)" id="xiayibu" class="xyb">立刻发布</a>
            <{__TOKEN__}>
        </form>
    </div>
    
    
   
    <form id = "form_file_jia_zhanshitu" enctype="multipart/form-data" action="<?php echo U('Goodsmanage/file_jia','name=file_img_zhanshitu&width=50&height=50');?>" method="get">   
        <input name="file_img_zhanshitu" type="file"  style="visibility:hidden; width:0px; height: 0px;"/>
    </form>

<script src="/Public/Admin/Js/release_news.js" type="text/javascript"></script>