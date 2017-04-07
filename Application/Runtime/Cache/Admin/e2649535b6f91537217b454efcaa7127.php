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


 
<link rel="stylesheet" type="text/css" href="/Public/Home/Css/public.css"/>
<link type="text/css" rel="stylesheet" href="/Public/Admin/Css/ordermange.css" />
<script src="/Public/Common/Js/jquery.min.js"></script> 
<script src="/Public/Common/Js/function.js"></script> 
<script src="/Public/Common/Js/jquery.form.js"></script> 
</head>
<body>
    <div class="inof_div">
        <div class="big_title">订单管理</div>
        <div class='status'>
            <div>订单状态：</div>
            <a id='status_all' href="<?php echo U('Ordermanage/index');?>">全部</a>
            <a id='status_0' href="<?php echo U('Ordermanage/index',array('status'=>'1'));?>">待付款</a>
            <a id='status_2' href="<?php echo U('Ordermanage/index',array('status'=>'2'));?>">待发货</a>
            <a id='status_3' href="<?php echo U('Ordermanage/index',array('status'=>'3'));?>">待收货</a>
            <a id='status_4' href="<?php echo U('Ordermanage/index',array('status'=>'4'));?>">待评价</a>
        </div>
        <table class="order_table">
            <tr class="title">
                <td class="td1">订单ID</td>
                <td class="td2">商品名称</td>
                <td class="td3">自选属性</td>
                <td class="td4">订单状态</td>
                <td class="td5">买家</td>
                <td class="td6">购买数量</td>
                <td class="td7">收货地址</td>
                <td class="td8">代金券</td>
                <td class="td9">金额</td>
                <td class="td10">下单时间</td>
                <td class="td11">操作</td>
            </tr>
            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="content">
                    <td class="td1"><?php echo ($vo['order_id']); ?></td>
                    <td class="td2"><?php echo ($vo['goods_name']); ?></td>
                    <td class="td3"><?php echo ($vo['zx_shuxing']); ?></td>
                    <td class="td4"><?php echo get_status($vo['status'],$vo['pay_status'],$vo['tuan_no']);?></td>
                    <td class="td5"><?php echo ($vo['user_name']); ?></td>
                    <td class="td6"><?php echo ($vo['buy_number']); ?></td>
                    <td class="td7"><?php echo ($vo['order_address']); ?></td>
                    <td class="td8">&yen;<?php echo (floatval($vo['daijinquan'])); ?></td>
                    <td class="td9">&yen;<?php echo (floatval($vo['dues'])); ?></td>
                    <td class="td10"><?php echo (date("Y/m/d",$vo['created'])); ?></td>
                    <?php if(($vo['status'] == 2)and ($vo['pay_status'] == 1) and ($vo['tuan_no'] != 0)): ?><td class='td11'><a style="margin-top:15px; " id="<?php echo ($vo['order_id']); ?>" href='<?php echo U("Ordermanage/fahuo",array("order_id"=>$vo["order_id"]));?>'><input type="button"  value="发货" /></a></td>
                    <?php elseif(($vo['status'] == 6) and ($vo['pay_status'] == 1)): ?>
                        <td class='td11'><a style="margin-top:15px; " id="<?php echo ($vo['goods_id']); ?>" href='<?php echo U("Goodsmanage/goods_editor",array("goods_id"=>$vo["order_id"]));?>'><input type="button"  value="退款" /></a></td>
                    <?php elseif($vo['pay_status'] == 2): ?>
                        <td class='td11'><a style="margin-top:15px; " id="<?php echo ($vo['order_id']); ?>" href='<?php echo U("Goodsmanage/goods_editor",array("goods_id"=>$vo["order_id"]));?>'><input type="button"  value="处理退款" /></a></td>
                    <?php else: ?>
                        <td class='td11'></td><?php endif; ?>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </table>
        
       
    
        
        
        <div class="page_foot"><?php echo ($page_foot); ?></div>
    </div>
   
    
    

<script type="text/javascript">
    var status="<?php echo ($status); ?>";
    var css_xuanzhong={
        backgroundColor:'#00FFDB',
        color:'#FFF'
    };
    var css_no_xuan={
        backgroundColor:'#FFF',
        color:'#666'
    }
    if(status=='0'){
        $('#status_0').css(css_xuanzhong);
        $('#status_0').siblings('a').css(css_no_xuan);
    }else if(status=='1'){
        $('#status_1').css(css_xuanzhong);
        $('#status_1').siblings('a').css(css_no_xuan);
    }else if(status=='2'){
        $('#status_2').css(css_xuanzhong);
        $('#status_2').siblings('a').css(css_no_xuan);
    }else if(status=='3'){
        $('#status_3').css(css_xuanzhong);
        $('#status_3').siblings('a').css(css_no_xuan);
    }else if(status=='4'){
       $('#status_4').css(css_xuanzhong);
        $('#status_4').siblings('a').css(css_no_xuan);
    }else{
        $('#status_all').css(css_xuanzhong);
        $('#status_all').siblings('a').css(css_no_xuan);
    }
    
    
    
    
    
    
</script>