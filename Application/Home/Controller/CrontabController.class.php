<?php
namespace Home\Controller;
use  Home\Controller;
class CrontabController extends FontEndController {
    
    
    public function perminute() {
        $this->pre_result();
        $this->auto_result();
    }
    
    //结果写入数据库
    private function pre_result() {
        $result=$this->get_qq_online();
        //结果存入数据库
        $PreresultModel=D('Preresult');
        $hours=(int)date('H');
        $min=(int)date('i');
        $qi_shu=date('Ymd').'-'.($hours*60+$min);
        $row=array(
            'preresult_num'=>$qi_shu,
            'result'=>$result,
            'preresult_time'=>time(),
        );
        $PreresultModel->add($row);
    }
    
    //客户订单自动计算结果  客户留在页面自行响应结果的除外
    private function auto_result() {
        $hours=(int)date('H');
        $min=(int)date('i');
        $qi_shu=date('Ymd').'-'.($hours*60+$min);
        $qq_online=$this->get_qq_online();
  
        $OrderModel=D('Order');
        $arr_order=$OrderModel->where("qi_shu='{$qi_shu}' and result<>0")->field('order_id,user_id')->select();
        //开奖结果写入订单
        foreach ($arr_order as $order) {
            $order_id=$order['order_id'];
            //计算结果
            $result=  get_result($qq_online);
            $order_goodsmodel=D('Order_goods');
            $arr=$order_goodsmodel->where("order_id='{$order_id}'")->select();
            $arr_result=$this->result_push($result[0],$result[1],$result[2]);
            $order_profit=0;
            foreach ($arr as $value) {
                $guess_id=$value['guess_id'];
                $rec_id=$value['rec_id'];
                $is_win=in_array((int)$guess_id,$arr_result);
                if(!$is_win){//没中奖
                    $row=array(
                        'goods_profit'=>0
                    );
                    $order_goodsmodel->where("rec_id='{$rec_id}'")->save($row);
                }else{//中奖
                if($guess_id==0||$guess_id==9){
                    $row=array(
                        'goods_profit'=>$value['goods_dues']*4*(1-CHOUSHUI)
                    );
                    $order_goodsmodel->where("rec_id='{$rec_id}'")->save($row);
                    $order_profit+=(int)$row['goods_profit'];
                }else if($guess_id==1||$guess_id==2||$guess_id==7||$guess_id==8){
                    $row=array(
                        'goods_profit'=>$value['goods_dues']*2*(1-CHOUSHUI)
                    );
                    $order_goodsmodel->where("rec_id='{$rec_id}'")->save($row);
                    $order_profit+=(int)$row['goods_profit'];
                }else if($guess_id==3||$guess_id==6){
                    $row=array(
                        'goods_profit'=>$value['goods_dues']*3*(1-CHOUSHUI)
                    );
                    $order_goodsmodel->where("rec_id='{$rec_id}'")->save($row);
                    $order_profit+=(int)$row['goods_profit'];
                }else if($guess_id==4){
                    $row=array(
                        'goods_profit'=>$value['goods_dues']*60*(1-CHOUSHUI)
                    );
                    $order_goodsmodel->where("rec_id='{$rec_id}'")->save($row);
                    $order_profit+=(int)$row['goods_profit'];
                }else if($guess_id==5){
                    $row=array(
                        'goods_profit'=>$value['goods_dues']*30*(1-CHOUSHUI)
                    );
                    $order_goodsmodel->where("rec_id='{$rec_id}'")->save($row);
                    $order_profit+=(int)$row['goods_profit'];
                }
            }
            }
            
            $row=array(
                'result'=>$result,
                'order_profit'=>$order_profit
            );
            $OrderModel->where("order_id='{$order_id}'")->save($row);
            
            //余额写入表
            $user_id=$order['user_id'];
            $usersmodel=D('Users');
            $usersmodel->where("user_id='{$user_id}'")->setInc('balance',(int)$order_profit);
        }
    }
    
    
    
    
    
    
    
    
    
   //获取QQ在线人数
    private function get_qq_online() {
        $qq_online_url = "http://mma.qq.com/cgi-bin/im/online&callback=?";
        $res = file_get_contents($qq_online_url); //获取文件内容或获取网络请求的内容
        $reg='/online_resp\(\{"c":\d{7,10},"ec"/i';
        preg_match($reg,$res,$qq_online);
        $reg='/\d{7,10}/i';
        preg_match($reg,$qq_online[0],$qq_online);
        return substr($qq_online[0],-3);
   }
   
   
   
   //结果入数组
private function result_push($result_one,$result_two,$result_three){
    $result_last=$result_one+$result_two+$result_three;
    if($result_last<14){
        $arr_result[]=7;//小数
        if($result_last%2===0){
            $arr_result[]=9;//小双
            $arr_result[]=2;//双
        }else{
            $arr_result[]=6;//小单
            $arr_result[]=8;//单
        }
    }else{
        $arr_result[]=1;//大数
        if($result_last%2===0){
            $arr_result[]=3;//大双
            $arr_result[]=2;//双
        }else{
            $arr_result[]=0;//大单
            $arr_result[]=8;//单
        }
    }
    
    if($result_one===$result_two&&$result_one===$result_three){
        $arr_result[]=4;//豹子
    }
    if($result_three-$result_two===1&&$result_two-$result_one===1){
        $arr_result[]=5;//顺子
    }
    return $arr_result;
    
}
    
}


