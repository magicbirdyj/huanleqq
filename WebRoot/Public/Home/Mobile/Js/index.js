$('.trade_list_box').bind('click',function(){
    if(login==='no_login'){
        $('.login_content').css('display','block');
        $('.big-shade-all').css('display','block');
        ref_url="/Home/Game/index";
    }else{
        window.location="/Home/Game/index";
    }
});
