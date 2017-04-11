var url=window.location.pathname.toLowerCase();// /home/index/index  /home/member/moner_pack     /home/member/index
if(url=='/' || url=='/home/index/index.html'){
    $('.footnav>nav>a:eq(0)').children().css('color','#f8626d');
}else if(url=='/home/member/money_pack.html'){
    $('.footnav>nav>a:eq(1)').children().css('color','#f8626d');
}else if(url=='/home/member/index.html'){
    $('.footnav>nav>a:eq(2)').children().css('color','#f8626d');
}
