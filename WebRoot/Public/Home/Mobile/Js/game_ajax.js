


function server_xiazhu(){
    //先验证时间
    get_time();
    var newDate = new Date();
    newDate.setTime(time_chuo * 1000);
    var date=('0'+newDate.getDate()).slice(-2);//日期
    var month=('0'+(newDate.getMonth()+1)).slice(-2);//月份
    var year=newDate.getFullYear();//年
    var hours=newDate.getHours();//小时
    var min=newDate.getMinutes();//分钟
    var sec=newDate.getSeconds();//秒钟
    qi_shu=1+hours*60+min;
    qi_shu=String(year)+month+date+'-'+String(qi_shu);
    
    var server_time=60-sec;
    if(server_time<5){
        alert('对不起，下单超时');
        return false;
    }else{//时间验证没问题
        //验证余额
        get_balance();
        if(balance<all_chouma){
            alert('余额不足，下单失败');
            return false;
            $('#accountMoney').text(balance);
        }else{//验证余额通过，开始下单
            ajax_xia_dan(all_chouma,qi_shu);
            balance=balance-all_chouma;
        }
    }
}





function get_balance(){
    var url='/Home/Ajaxlogin/get_balance.html';
    var data={
            check:"get_balance"
            };
    $.ajax({
        type:'post',
        url:url,
        data:data,
        datatype:'json',
        async : false, 
        success:function(msg){
                balance=msg;
                balance_clone=msg;
            }
    });
}

function ajax_xia_dan(all_chouma,qi_shu){
    var url='/Home/Ajaxlogin/ajax_xia_dan.html';
    var data={
        all_chouma:all_chouma,
        arr_goods:arr_guess,
        qi_shu:qi_shu,
        check:"xia_dan"
        };
    $.ajax({
        type:'post',
        url:url,
        data:data,
        datatype:'json',
        async : true, 
        success:function(msg){
            if(msg=='1'){
                alert('期数不对，下单失败');
            }else if(msg=='2'){
                alert('下注超过500，下单失败');
            }
            }
    });
}


//结果写入order和order_goods
function result_order_and_order_goods(){
    var url='/Home/Ajaxlogin/result_order_and_order_goods.html';
    var data={
        check:"result_order"
        };
    $.ajax({
        type:'post',
        url:url,
        data:data,
        datatype:'json',
        async : true, 
        success:function(msg){
            //alert(msg);
        }
    });
}




