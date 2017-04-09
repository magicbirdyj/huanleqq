
$('#guessRecharge').bind('click',function(){
    window.location.href="/Home/Charge/index";
});

var dues='1';
//充值
$('.rechange_money_confirm_btn').bind('click',function(){
    if(is_weixin=='true'){
        window.location.href="/Home/Login/index/url_1/charge/url_2/zhifu/dues/"+dues;
    }else{
        //不是微信浏览器  直接出现扫码
    }
});


$('.rechange_money_btn').bind('click',function(){
    $('.rechange_money_btn').removeClass('rechange_money_btn_active');
    $(this).addClass('rechange_money_btn_active');
    dues=$(this).attr('dues');
});


var withdraw_dues;
//提现
$('.withdraw_money_confirm_btn').bind('click',function(){
    withdraw_dues=parseInt($('#moneyinput').val());
    if(!withdraw_dues){
        alert('请输入正确的提现金额');
        return false;
    }
    
    if(withdraw_dues>balance){
         alert('余额不足!请重新输入提现金额'); 
         return false;
        }
    if(is_weixin=='true'){
         window.location.href="/Home/Login/index/url_1/charge/url_2/withdraw_money/withdraw_dues/"+withdraw_dues;
    }else{
        //不是微信浏览器  直接出现扫码
    }
});

$('#moneyinput').bind('blur',function(){
    var value=parseInt($('#moneyinput').val());
    if(value){
        $(this).val(value);
    }else{
        $(this).val(0);
    }
});