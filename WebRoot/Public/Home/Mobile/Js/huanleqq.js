var chouma=10;//下注的筹码  默认为10
var xia_zhu_flag=true;
//各个下单筹码值






//下单中的筹码默认不显示
$('.guess_top_orders_black_bg>.guess_top_orders_black_img').attr('style','display:none');

var guangquan_one='<div class="guess_bottom_chess_one_glow" ng-if="10==chipFlag"></div>';
var guangquan_five='<div class="guess_bottom_chess_five_glow" ng-if="50==chipFlag"></div>';
var guangquan_ten='<div class="guess_bottom_chess_ten_glow" ng-if="100==chipFlag"></div>';

$('.guess_bottom_chess_num_box').bind('click',function(){
    var eq=$(this).index();
    if(eq==0){
        $('.guess_bottom_chess_five_glow').remove();
        $('.guess_bottom_chess_ten_glow').remove();
        $(this).append(guangquan_one);
        chouma=10;
    }else if(eq==1){
        $('.guess_bottom_chess_one_glow').remove();
        $('.guess_bottom_chess_ten_glow').remove();
        $(this).append(guangquan_five);
        chouma=50;
    }else if(eq==2){
        $('.guess_bottom_chess_five_glow').remove();
        $('.guess_bottom_chess_one_glow').remove();
        $(this).append(guangquan_ten);
        chouma=100;
    }
});





//点击下注

    $(".guess_height,.guess_orange").click(function(){
        if(xia_zhu_flag){
            //底部0-27数字显示，说明文字隐藏
            $('.guess_top_bottom_row_box_img').css('display','block');
            $('.guess_top_bottom_row_box_txt').css('display','none');
            xia_zhu($(this));
        }
    });
    //点击下注函数
    function xia_zhu(even){
        //先检测余额是否充足
        if(balance<chouma){
            return false;
        }
        
        var chouma_css;
        if(chouma==10){
            var obj_chouma=$('.guess_bottom_chess_one_bg');
            chouma_css='coin_one';
        }else if(chouma==50){
            var obj_chouma=$('.guess_bottom_chess_five_bg');
            chouma_css='coin_five';
        }else if(chouma==100){
            var obj_chouma=$('.guess_bottom_chess_ten_bg');
            chouma_css='coin_ten';
        }
        var offset = obj_chouma.offset(); 
        var img = obj_chouma.css('backgroundImage'); 
        var length=img.length;
        img=img.substring(5,length-2);
        var flyer = $('.u-flyer');
        var width=obj_chouma.width();
        
        var end_offset=even.offset();
        var end_width=even.width();
        var end_height=even.height();
        var end_offset_left=end_offset.left+(end_width-width)/2;
        var end_offset_top=end_offset.top+(end_height-width)/2;
        
        flyer.attr('src',img);
        flyer.css('width',width);
        flyer.css('left',offset.left);
        flyer.css('top',offset.top);
        flyer.css('display','block');
        var add_chouma = even; 
        
        //余额减少
        balance-=chouma;
        $('#accountMoney').text(balance);
        //所有筹码增加
        all_chouma+=chouma;
        
        flyer.animate({"left":end_offset_left,"top":end_offset_top},'normal',function(){
            flyer.css('display','none'); //移除dom 
            buy_number(add_chouma,chouma_css);
        });
    }
    
    
    //取消下注
    $('.guess_cancle').bind('click',function(){
        if(xia_zhu_flag){
            //余额恢复
            balance=balance_clone;
            quxiao_xiazhu();
        }
    });
    
    //下注增加
    function buy_number(add_chouma,chouma_css){ 
        add_chouma.find('.guess_top_orders_black_bg').css('display','block');
        add_chouma.find('.'+chouma_css).attr('style','display:flex').siblings().css('display','none');
        //下单值增加
        var id=add_chouma.attr('id');
        switch(id)
        {
            case 'guess0':
                arr_guess[0]+=chouma;
                add_chouma.find('.'+chouma_css).text(arr_guess[0]);
                //被选中的数字变黄色
                $('.guess_top_bottom_num_wh').each(function(i,item){
                    if(i>13&&i%2==1){
                        new_src($(item));
                    }
                });
                break;
            case 'guess1':
                arr_guess[1]+=chouma;
                add_chouma.find('.'+chouma_css).text(arr_guess[1]);
                //被选中的数字变黄色
                $('.guess_top_bottom_num_wh').each(function(i,item){
                    if(i>13){
                        new_src($(item));
                    }
                });
                break;
            case 'guess2':
                arr_guess[2]+=chouma;
                add_chouma.find('.'+chouma_css).text(arr_guess[2]);
                //被选中的数字变黄色
                $('.guess_top_bottom_num_wh').each(function(i,item){
                    if(i%2==0){
                        new_src($(item));
                    }
                });
                break;
            case 'guess3':
                arr_guess[3]+=chouma;
                add_chouma.find('.'+chouma_css).text(arr_guess[3]);
                //被选中的数字变黄色
                $('.guess_top_bottom_num_wh').each(function(i,item){
                    if(i>13&&i%2==0){
                        new_src($(item));
                    }
                });
                break;
            case 'guess4':
                arr_guess[4]+=chouma;
                add_chouma.find('.'+chouma_css).text(arr_guess[4]);
                break;
            case 'guess5':
                arr_guess[5]+=chouma;
                add_chouma.find('.'+chouma_css).text(arr_guess[5]);
                break;
            case 'guess6':
                arr_guess[6]+=chouma;
                add_chouma.find('.'+chouma_css).text(arr_guess[6]);
                //被选中的数字变黄色
                $('.guess_top_bottom_num_wh').each(function(i,item){
                    if(i<14&&i%2==1){
                        new_src($(item));
                    }
                });
                break;
            case 'guess7':
                arr_guess[7]+=chouma;
                add_chouma.find('.'+chouma_css).text(arr_guess[7]);
                //被选中的数字变黄色
                $('.guess_top_bottom_num_wh').each(function(i,item){
                    if(i<14){
                        new_src($(item));
                    }
                });
                break;
            case 'guess8':
                arr_guess[8]+=chouma;
                add_chouma.find('.'+chouma_css).text(arr_guess[8]);
                //被选中的数字变黄色
                $('.guess_top_bottom_num_wh').each(function(i,item){
                    if(i%2==1){
                        new_src($(item));
                    }
                });
                break;
            case 'guess9':
                arr_guess[9]+=chouma;
                add_chouma.find('.'+chouma_css).text(arr_guess[9]);
                //被选中的数字变黄色
                $('.guess_top_bottom_num_wh').each(function(i,item){
                    if(i<14&&i%2==0){
                        new_src($(item));
                    }
                });
                break;
        }
}


function new_src(obj){
    var src=obj.children('img').attr('src');
    if(src.indexOf('num-on-')===-1){
        var new_src=src.replace('num-','num-on-');
        obj.children('img').attr('src',new_src);
    }
}

//还原src     点击取消下注按钮用
function huan_yuan_src(){
    $('.guess_top_bottom_num_wh').each(function(i,item){
        var src=$(item).children('img').attr('src');
        if(src.indexOf('num-on-')!==-1){
            var new_src=src.replace('num-on-','num-');
            $(item).children('img').attr('src',new_src);
        }
    });
}


//取消下注
function quxiao_xiazhu(){
            $('#accountMoney').text(balance);
            //下注取消
            $(".guess_height,.guess_orange").find('.guess_top_orders_black_bg').css('display','none');
            $(".guess_height,.guess_orange").find('.guess_top_orders_black_img').css('display','none');
            arr_guess=[0,0,0,0,0,0,0,0,0,0];
            //底部0-27数字隐藏，说明文字显示
            $('.guess_top_bottom_row_box_txt').css('display','block');
            $('.guess_top_bottom_row_box_img').css('display','none');
            //被选数字颜色还原
            huan_yuan_src();
}