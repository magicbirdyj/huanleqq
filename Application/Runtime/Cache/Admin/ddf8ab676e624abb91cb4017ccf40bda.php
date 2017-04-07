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
<link type="text/css" rel="stylesheet" href="/Public/Admin/Css/fenleimanger.css" />
<script src="/Public/Common/Js/jquery.min.js"></script> 
<script src="/Public/Common/Js/function.js"></script> 
<script src="/Public/Common/Js/jquery.form.js"></script> 
</head>
<body>
    <div class="inof_div">
        <div class="top_title">商品分类管理 <a id='tianjia_fenlei' href="<?php echo U('Category/tianjia');?>"><input class="tianjia_button" type="button"  value="添加分类" /></a></div>
       
         <div class="title"><!--标题行-->
            <div class='td1'>分类编号</div>
            <div class='td2'>所属大类</div>
            <div class='td3'>分类名称</div>
            <div class='td4'>商品数量</div>
            <div class='td5'>排序</div>
            <div class='td6'>操作</div>
        </div>
        <?php if(is_array($fenlei)): $i = 0; $__LIST__ = $fenlei;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="content"><!--内容遍历-->
            <div class='td1'><?php echo ($vo['cat_id']); ?></div>
            <div class='td2'><?php echo ($vo['pid_name']); ?>[<?php echo ($vo['pid_id']); ?>]</div>
            <div class='td3'><?php echo ($vo['cat_name']); ?></div>
            <div class='td4'><{}></div>
            <div class='td5'><?php echo ($vo['sort_order']); ?></div>
            <div class='td6'><a style="margin-top:15px; " href='<?php echo U("Category/fenlei_editor",array("cat_id"=>$vo["cat_id"]));?>' ><input type="button"  value="编辑" /></a><input type="button" class="input_button del" id="<?php echo ($vo['cat_id']); ?>"  name="<?php echo ($vo['cat_name']); ?>'"  value="删除" /></div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?> 
    
        
        
        <div class="page_foot"><?php echo ($page_foot); ?></div>
       
    </div>
   
    
    
    <script>
        $('.del').bind('click',function(){
            if(window.confirm('确定要删除分类'+$(this).attr('name')+'吗？')){
                cat_id=$(this).attr('id');
                del(cat_id);
            }
        });
        
        function del(cat_id){
             var data={
                cat_id:cat_id,
                check:"del_fenlei"
                };
            $.ajax({
            type:'GET',
            url:'/Admin/Category/del_fenlei',
            data:data,
            dataType:'json',
            success:function(msg){
                if(msg){
                    location=location;
                }else{
                    alert('删除失败');
                }
            }
        });
        }
    
    </script>
</body>
</html>