var server_time;
var choushui=0.1;
var arr_result=new Array();
var ding_shi;

//开奖结果显示
var result;
var result_one;
var result_two;
var result_three;
var result_last;
big_fun();


function big_fun(){
    quxiao_xiazhu();
    get_time();
    var newDate = new Date();
    newDate.setTime(time_chuo * 1000);
    var date=('0'+newDate.getDate()).slice(-2);//日期
    var month=('0'+(newDate.getMonth()+1)).slice(-2);//月份
    var year=newDate.getFullYear();//年
    var hours=newDate.getHours();//小时
    var min=newDate.getMinutes();//分钟
    var sec=newDate.getSeconds();//秒钟
    var qi_shu=1+hours*60+min;
    
    //日期与期数写人页面
    $('#curphaseid').text(String(year)+month+date+'-'+String(qi_shu));
    
    server_time=60-sec;
    $(".guess_height,.guess_orange").find('.guess_top_orders_black_bg').css('display','none');//取消筹码
    arr_guess=[0,0,0,0,0,0,0,0,0,0];//筹码清0
    arr_result=[];//结果清0
    if(server_time>10){
        begin();
        //定时器
        ding_shi = window.setInterval("begin()",1000);
    }else{//进去也没就少于10秒
        //禁止下单
        xia_zhu_flag=false;
        //开启开奖倒计时
        dao_ji_shi=window.setInterval("kai_jiang_begin()",1000); 
    }
}
    
    

var dao_ji_shi;
//定时下单函数
function begin(){
    xia_zhu_flag=true;
    $('.guess_top_order_green_top_result').attr('style','display:none');//开奖隐藏
    $('.guess_top_order_green_top_order').attr('style','display:block');//下单中显示
    
    $('.cdNumLast').attr('style','display:none');
    $('.cdNumNormal').attr('style','display:flex');
    $('#countDownDesc').text('下单中');
    $('.cdNumNormal').text(server_time);
    server_time-=1;
    if(server_time===10){
        window.clearInterval(ding_shi); //清除定时器
        //禁止下单
        xia_zhu_flag=false;
        //开启开奖倒计时
        dao_ji_shi=window.setInterval("kai_jiang_begin()",1000); 
    }
}


//定时开奖函数
function kai_jiang_begin(){
    if(server_time<=0){
        window.clearInterval(dao_ji_shi); //清除定时器
        $('.cdNumLast').attr('style','display:none');
        //下单结果
        kaijiang();
    }else{
        $('.cdNumNormal').attr('style','display:none');
        $('.cdNumLast').attr('style','display:flex');
        $('#countDownDesc').text('等待开奖');
        $('.cdNumLast').text(server_time);
        $('.cdNumLast').css('font-size','15rem');
        $('.cdNumLast').animate({"font-size":"5rem"},950);
    }
   
    server_time-=1;
}




//开奖
function kaijiang(){
    $('.guess_top_order_green_top_order').animate({'aa':'90'},{step:function(now){ $('.guess_top_order_green_top_order').css('transform',"rotateY("+now+"deg)")},duration:200,complete:function(){
        var height=$('.result_title').height();
        $('.result_title').css('margin-top','-'+height+'px');//开奖结果先往上移影藏
        $('.guess_top_order_green_top_result').attr('style','display:block');//开奖显示
        $('.guess_top_order_green_top_order').attr('style','display:none');//下单中隐藏
        $('.guess_top_order_green_top_result').css('transform','rotateY(90deg)');
        $('.guess_top_order_green_top_result').animate({'aa':'90'},{step:function(now){ $('.guess_top_order_green_top_result').css('transform',"rotateY("+(90-now)+"deg)")},duration:200,complete:function(){
                //aa归位为0
                $('.guess_top_order_green_top_order').css('aa','0');
                $('.guess_top_order_green_top_result').css('aa','0');
                get_qq_online();
        result=qq_online.substr(qq_online.length-3);
        result_one=parseInt(result/100)%10;
        result_two=parseInt(result/10)%10;
        result_three=result%10;
        result_last=result_one+result_two+result_three;
        //开奖结果赋值
        $('.result_last_num1').text(result_one);
        $('.result_last_num2').text(result_two);
        $('.result_last_num3').text(result_three);
        $('.result_number').text(result_last);
        $('.result_last_three>div').css('transform','translate(-80px,-80px)');//开奖结果先往上移影藏
        $('.result_number').css('display','none');//开奖结果先影藏
                kaijiang_result();
        }});
    }});
    
}


function kaijiang_result(){
    $('.result_title_txt_num').text(parseInt(qq_online/1000));
    $('.result_title_txt_color').text(qq_online.substr(qq_online.length-3));
    $('.result_title').animate({'margin-top':'0px'},600);
    window.setTimeout(" fly_num($('.result_last_num1'),result_one)",600);//延时600
    window.setTimeout(" fly_num($('.result_last_num_add1'),'+')",900);//延时300
    window.setTimeout(" fly_num($('.result_last_num2'),result_two)",1200);//延时300
    window.setTimeout(" fly_num($('.result_last_num_add2'),'+')",1500);//延时300
    window.setTimeout(" fly_num($('.result_last_num3'),result_three)",1800);//延时300
    window.setTimeout(" fly_num($('.result_last_num_equle'),'=')",2100);//延时300
    //最终结果
    window.setTimeout("result_animate()",2400);//延时300
}

//数字飞来
function fly_num(obj){
    obj.animate({'aa':'80'},{step:function(now){obj.css('transform','translate('+(now-80)+'px,'+(now-80)+'px)')},duration:300,complete:function(){
            obj.css('aa','0');
    }});
}
//最终结果动画
function result_animate(){
    $('.result_number').css('font-size','20rem');
    $('.result_number').css('display','block');
    $('.result_number').animate({'font-size':'8rem'},500,function(){
        //中奖的下单图片开始闪4秒
        result_push();//结果入数组
        for(var i=0;i<arr_result.length;i++){
            var id='guessBorder'+arr_result[i];
            $('#'+id).css('display','block');
        }
        //4秒后隐藏
        window.setTimeout("yin_cang()",4000);
    });
}

//隐藏结果闪耀
function yin_cang(){
    for(var i=0;i<arr_result.length;i++){
            var id='guessBorder'+arr_result[i];
            $('#'+id).css('display','none');
    }

    //赢钱入账
    ji_suan_result();
    
}

//结果入数组
function result_push(){
    if(result_last<14){
        arr_result.push('7');//小数
        if(result_last%2==0){
            arr_result.push('9');//小双
            arr_result.push('2');//双
        }else{
            arr_result.push('6');//小单
            arr_result.push('8');//单
        }
    }else{
        arr_result.push('1');//大数
        if(result_last%2==0){
            arr_result.push('3');//大双
            arr_result.push('2');//双
        }else{
            arr_result.push('0');//大单
            arr_result.push('8');//单
        }
    }
    
    if(result_one===result_two&&result_one===result_three){
        arr_result.push('4');//豹子
    }
    if(result_three-result_two===1&&result_two-result_one===1){
        arr_result.push('5');//顺子
    }
    
}

//计算结果  筹码入账
function ji_suan_result(){
    var end_offset=$('#userMoney').offset();
    for(var i=0;i<10;i++){
        var is_chou_ma=$('#guess'+i).find('.guess_top_orders_black_bg');
        if(is_chou_ma.css('display')=='block'){//有筹码
            var is_win=$.inArray(String(i), arr_result);
            var obj=$('#guess'+i).find('.guess_top_orders_black_img[style="display:flex"]');
            if(is_win===-1){//没中奖
                chou_ma_result_animate(obj,false,end_offset);
            }else{//中奖
                chou_ma_result_animate(obj,true,end_offset);
                balance=parseInt(balance);
                if(i===0||i===9){
                    balance+=arr_guess[i]*4*(1-choushui);
                }else if(i===1||i===2||i===7||i===8){
                    balance+=arr_guess[i]*2*(1-choushui);
                }else if(i===3||i===6){
                    balance+=arr_guess[i]*3*(1-choushui);
                }else if(i===4){
                    balance+=arr_guess[i]*60*(1-choushui);
                }else if(i===5){
                    balance+=arr_guess[i]*30*(1-choushui);
                }
                //余额显示
                $('#accountMoney').text(balance);
                balance_clone=balance;
            }
        }
        if(i===9){
             window.setTimeout("again()",1000);//延时1000执行下一次
        }
    }
}

//筹码往上跑或者往余额跑
function chou_ma_result_animate(obj,flag,end_offset){
    var offset=obj.offset();
    if(flag){
        //obj.animate({"left":'100px',"top":'100px'},1000);
        obj.animate({"left":end_offset.left-offset.left,"top":end_offset.top-offset.top},1000,function(){
             obj.css('display','none'); //移除dom 
             obj.css('left','0'); //归位
             obj.css('top','0'); //归位
         });//中了
    }else{
        //obj.animate({"left":'100px',"top":'100px'},1000);
        obj.animate({"left":200-obj.width()-offset.left,"top":0-obj.width()-offset.top},1000,function(){
             obj.css('display','none'); //移除dom 
             obj.css('left','0'); //归位
             obj.css('top','0'); //归位
         });//没中
    }
    
}


//反转开奖界面
function again(){
    $('.guess_top_order_green_top_result').animate({'aa':'90'},{step:function(now){ $('.guess_top_order_green_top_result').css('transform',"rotateY("+now+"deg)")},duration:200,complete:function(){
        $('.guess_top_order_green_top_order').attr('style','display:block');//下单中显示
        $('.guess_top_order_green_top_result').attr('style','display:none');//开奖隐藏
        $('.guess_top_order_green_top_order').css('transform','rotateY(90deg)');
        $('.guess_top_order_green_top_order').animate({'aa':'90'},{step:function(now){ $('.guess_top_order_green_top_order').css('transform',"rotateY("+(90-now)+"deg)")},duration:200,complete:function(){
                //aa归位为0
                $('.guess_top_order_green_top_order').css('aa','0');
                $('.guess_top_order_green_top_result').css('aa','0');
                $('.result_number').css('display','none');//最终结果隐藏
                before_result(result_last)//往期结果入队
                //all_chouma清零
                all_chouma=0;
                big_fun();//延时1000执行下一次
        }});
    }});
    
}

function before_result(xingcan_result){
    $('.guess_top_order_green_bottom>.guess_top_order_green_bottom_num:first').remove();
    var $div=$('<div class="guess_top_order_green_bottom_num" style="width: 20.9299px; height: 20.9299px;"><img alt="" class="hide" src=""></div>');
    $div.children('img').attr('src',"/Public/Home/Mobile/Images/num/num-"+xingcan_result+".png");
    $('.guess_top_order_green_bottom>.guess_top_order_green_bottom_num:last').after($div);
}