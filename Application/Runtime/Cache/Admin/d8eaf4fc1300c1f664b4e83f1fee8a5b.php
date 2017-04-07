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
<link type="text/css" rel="stylesheet" href="/Public/Admin/Css/shopmanger.css" />
<script src="/Public/Common/Js/jquery.min.js"></script> 
<script src="/Public/Common/Js/function.js"></script> 
<script src="/Public/Common/Js/jquery.form.js"></script> 
</head>
<body>
    <div class="inof_div">
        <div class="big_title">文章管理</div>
        <form name="sv_cont"  method="get"   action="<?php echo U('News/index');?>">
            
            <div class="serch_div">
                <div class="tr_td1">输入文章标题</div>
                <input type="text" name="serch" class="text_serch" value="<?php echo ($serch_name); ?>" />
                <input type="submit" name="serch_sm" value="搜索"/>
            </div>
        </form>
        <div class="title"><!--标题行-->
            <div class='td1'>序号</div>
            <div class='td2'>文章标题</div>
            <div class='td3'>文章图片</div>
            <div class='td8'>点击人数</div>
            <div class='td4'>创建时间</div>
            <div class='td5'>更新时间</div>
            <div class='td7'>排序</div>
            <div class='td6'>操作</div>
        </div>
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="content"><!--内容遍历-->
            <div class='td1'><?php echo ($key+1); ?></div>
            <div class='td2'><?php echo ($vo[' news_name']); ?></div>
            <div class='td3'><a href="<?php echo U('/Home/News/index',array('news_id'=>$vo['news_id']));?>"><img src="<?php echo ($vo['img']); ?>" class="img_zst"/></a></div>
            <div class='td8'><?php echo ($vo['read_count']); ?>人</div>
            <div class='td4'><?php echo (date('Y/m/d H：i',$vo['created'])); ?></div>
            <div class='td5'><?php echo (date('Y/m/d H：i',$vo['updata'])); ?></div>
            <div class='td7'><input style="padding: 20px 10px;;border:none;" id='order_<?php echo ($vo["news_id"]); ?>' value="<?php echo ($vo['sort_order']); ?>" /></div>
            <div class='td6'><a style="margin-top:15px; " id="<?php echo ($vo['news_id']); ?>" href='<?php echo U("News/news_editor",array("news_id"=>$vo["news_id"]));?>' ><input type="button"  value="编辑" /></a><input type="button" class="input_button delete_button" id="<?php echo ($vo['news_id']); ?>"  name="<?php echo ($vo['news_name']); ?>'"  value="删除" /><input type="button" class="input_button order_button" id="button_order_<?php echo ($vo['news_id']); ?>"  value="修改排序" /></div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?> 
    
        
        
        <div class="page_foot"><?php echo ($page_foot); ?></div>
    </div>
   
    
    

<script type="text/javascript">
    var value="<?php echo ($server_content); ?>";
    $('select[name=server_content]').bind('change',function(){sc_change();});
    function sc_change(){
        $('form[name=sv_cont]').submit();
    }
    $(".release_select").val(value);
    $('.delete_button').bind('click',function(){
        var id=$(this).attr('id');
        var name=$(this).attr('name');
        var data={
            goods_id:id
        };
        if(window.confirm('确定要把 ['+name+']下架 吗？')){
            var url="/Admin/Goodsmanage/goods_del.html";
            $.ajax({
                type:'POST',
                async : false,
                url:url,
                data:data,
                datatype:'json'
            });
            window.location.href=window.location.href;
        }else{
            return false;
        }   
    });
    
    $('.order_button').bind('click',function(){
        var id=$(this).attr('id').substring(13);;
        var order=$("#order_"+id).val();
        if(window.confirm('确定要改变商品序号吗？')){
            var url="/Admin/Goodsmanage/goods_order.html";
            var data={
                goods_id:id,
                order:order
            };
            $.ajax({
                type:'POST',
                async : false,
                url:url,
                data:data,
                datatype:'json'
            });
            window.location.href=window.location.href;
        }else{
            return false;
        }   
    });
    
</script>
</body>
</html>