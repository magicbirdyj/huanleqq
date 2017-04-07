var i;
var youxiao;
$('.close_login_btn').bind('click',function(){
    $('.login_content').css('display','none');
    $('.big-shade-all').css('display','none');
});



$('#yzm').bind('click',function(){
    if(youxiao==false){
        return false;
    }
    if(is_shoujihao($('#mePhoneNum').val())){
        btn_sjyz_click();
    }else{
        alert('请输入正确的手机号');
    }
});


function btn_sjyz_click(){
    i=60;
    setit=setInterval("yanshi()",1000);
    var url='/Home/Ajaxnologin/send_message.html';
    var data={
            shoujihao:$('#mePhoneNum').val(),
            check:"send_message"
            };
    $.ajax({
        type:'post',
        url:url,
        data:data,
        datatype:'json',
        async : true, 
        success:function(msg){
        }
    });
}


function yanshi(){
    if(i>-1){
        youxiao=false;
        $('#yzm').addClass('changgePhoneNum_identify_gray');
        $('#yzm').removeClass('changgePhoneNum_identify');
        $('#yzm').text(i);
        i--;
    }else{
        clearInterval(setit);
        youxiao=true;
        $('#yzm').text('获取验证码');
        $('#yzm').addClass('changgePhoneNum_identify');
        $('#yzm').removeClass('changgePhoneNum_identify_gray');
    }
}

$('#login').bind('click',function(){
    if(is_shoujihao($('#mePhoneNum').val())){
        shoujiyanzheng();
    }else{
        alert('请输入正确的手机号');
    }
});
function shoujiyanzheng(){
    if($('#yzhm').val()===''){
        alert('请输入验证码');
        return false;
    }else{
        var url='/Home/Ajaxnologin/send_message.html';
        var data={
            shoujihao:$('#mePhoneNum').val(),
            yanzhengma:$('#yzhm').val(),
            check:"yanzheng_message"
            };
        $.ajax({
            type:'post',
            url:url,
            data:data,
            datatype:'json',
            async : false, 
            success:function(msg){
                if(!msg){
                    alert('验证码错误,请重新输入');
                }else{
                    //刷新页面
                    window.location=ref_url;
                }
            }
        });
    }
}