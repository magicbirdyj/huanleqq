
$('#guessRecharge').bind('click',function(){
    window.location.href="/Home/Charge/index";
});

var dues='1';

$('.rechange_money_confirm_btn').bind('click',function(){
    if(is_weixin=='true'){
        window.location.href="/Home/Login/index/dues/"+dues;
    }else{
        //不是微信浏览器  直接出现扫码
    }
});


$('.rechange_money_btn').bind('click',function(){
    $('.rechange_money_btn').removeClass('rechange_money_btn_active');
    $(this).addClass('rechange_money_btn_active');
    dues=$(this).attr('dues');
});
