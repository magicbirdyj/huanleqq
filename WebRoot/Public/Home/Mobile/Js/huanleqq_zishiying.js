//下单图片高度
var guess_height=$('.guess_top_orders_left').width()*213/240;
$('.guess_height').css('height',guess_height);
//下单图片中间高度
$('.guess_top_order_orange').css('height',guess_height);

//图片中间间隙宽度
var jianxi_width=$('.guess_top_order_gapy').width();
$('.guess_top_order_gapx').css('height',jianxi_width);
//结果图片中间高度
$('.guess_top_order_green').css('height',jianxi_width+guess_height*2);
//结果图片上部分高度
var guess_top_order_green_top=$('.guess_top_order_green_top').width()*1.148;
$('.guess_top_order_green_top').css('height',guess_top_order_green_top);
//1.148


//进度条的高度等于下单整体高度
$('.guess_top_loadingLine').css('height',$('.guess_top_orders_left').height());

//底部数字
var num_width=($(window).width()-20)/14;
$('.guess_top_bottom_num_wh').css('width',num_width);
$('.guess_top_bottom_num_wh').css('height',num_width);
$('.guess_top_bottom_num_wh').css('line-height',num_width);




//底部左右声音图片的大小
var soundHeight=document.getElementsByClassName("guess_bottom_chess_left")[0].offsetHeight;
document.getElementsByClassName("guess_sound")[0].style.height=soundHeight/2+"px";
document.getElementsByClassName("guess_sound")[0].style.width=soundHeight/2+"px";
document.getElementsByClassName("guess_cancle")[0].style.height=soundHeight/2+"px";
document.getElementsByClassName("guess_cancle")[0].style.width=soundHeight/2+"px";

//底部筹码的图片大小 
for(var y=0;y<3;y++){
    document.getElementsByClassName("guess_bottom_chess_num_box")[y].style.height=soundHeight*0.9+"px";
    document.getElementsByClassName("guess_bottom_chess_num_box")[y].style.width=soundHeight*0.9+"px";
            }
            

//下单筹码透明度
$('.guess_top_orders_black_bg').children('div').addClass('opacity');



//底部数字（0-27）的大小         
//var numWH=document.getElementsByClassName("guess_top_bottom_row1")[0].offsetWidth;
//var numChildren=document.getElementsByClassName("guess_top_bottom_num_wh");
//var numChildrenWidth=Math.floor(numWH*(0.87)/14);for(var n=0;n<28;n++){numChildren[n].style.height=numChildrenWidth+"px";numChildren[n].style.width=numChildrenWidth+"px";
//numChildren[n].style.lineHeight=numChildrenWidth+"px";if(n==0||n==14){continue}numChildren[n].style.marginLeft=Math.floor(numWH*(0.008))+"px"};