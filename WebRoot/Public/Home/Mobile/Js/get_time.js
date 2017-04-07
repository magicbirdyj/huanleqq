var time_chuo;
var qq_online;
var arr_guess=[0,0,0,0,0,0,0,0,0,0];
function get_time(){
    var url='/Home/Ajaxnologin/get_time.html';
    var data={
            check:"get_time"
            };
    $.ajax({
        type:'post',
        url:url,
        data:data,
        datatype:'json',
        async : false, 
        success:function(msg){
            if(!msg){
                alert('您没有网络连接');
                location=location;
            }else{
                time_chuo=msg;
            }
            },
        
    });
}


function get_qq_online(){
    var url='/Home/Ajaxnologin/get_qq_online.html';
    var data={
            check:"get_qq_online"
            };
    $.ajax({
        type:'post',
        timeout : 2000, //超时时间设置，单位毫秒
        url:url,
        data:data,
        datatype:'json',
        async : false, 
        success:function(msg){
            if(!msg){
                alert('您没有网络连接');
                location=location;
            }else{
                qq_online=msg;
            }
        }
    });
}

