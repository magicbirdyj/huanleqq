<?php
namespace Home\Controller;
use  Home\Controller;
class AjaxloginController extends FontEndController {
    public function get_balance() {
        if($_POST['check']!=='get_balance'){
            exit();
       }
        $user_id=$_SESSION['huiyuan']['user_id'];
        $usersmodel=D('Users');
        $users=$usersmodel->where("user_id='$user_id'")->find();
        $this->ajaxReturn($users['balance']);
    }
    
    public function ajax_xia_dan() {
        $post=$_POST;
        $arr_goods=$post['arr_goods'];
        //先验证期数是否正确
        $hours=(int)date('H');
        $min=(int)date('i');
        $qi_shu=date('Ymd').'-'.(1+$hours*60+$min);
        if($qi_shu!=$post['qi_shu']){
            $this->ajaxReturn('1');
            exit;
        }
        //下单
        $ordermodel=D('Order');
        $user_id=$_SESSION['huiyuan']['user_id'];
        $row = array(
            'user_id' => $user_id,
            'qi_shu'=>$qi_shu,
            'dues'=>$post['all_chouma'],
            'created' => time()
        );
        $result = $ordermodel->add($row); //订单信息写入数据库order表
        if($result){
            //余额写入users
            $usersmodel=D('Users');
            $balance=$usersmodel->where("user_id='$user_id'")->getField('balance');
            $row=array(
                'balance'=>$balance-$post['all_chouma']
            );
            $usersmodel->where("user_id='$user_id'")->save($row);
            
            //写入order_goods
            $order_goodsmodel=D('Order_goods');
            $goodsmodel=D('Goods');
            foreach ($arr_goods as $key => $value) {
                if($value!=0){
                    $row=array(
                        'order_id'=>$result,
                        'guess_id'=>$key,
                        'goods_name'=>$goodsmodel->where("guess_id=$key")->getField('goods_name'),
                        'goods_dues'=>$value
                    );
                    $order_goodsmodel->add($row);
                }
                
            }
        }
        
    }
    
    
    
    public function result_order_and_order_goods() {
        $hours=(int)date('H');
        $min=(int)date('i');
        $qi_shu=date('Ymd').'-'.($hours*60+$min);
        $result=$this->get_qq_online();
        $user_id=$_SESSION['huiyuan']['user_id'];
        $ordermodel=D('Order');
        $order_id=$ordermodel->where("user_id='{$user_id}' and qi_shu='{$qi_shu}'  and result<>0")->getField('order_id');
        if($order_id){
            //计算结果
            $result_one=((int)($result/100))%10;
            $result_two=((int)($result/10))%10;
            $result_three=((int)$result)%10;
            $order_goodsmodel=D('Order_goods');
            $arr=$order_goodsmodel->where("order_id='{$order_id}'")->select();
            $arr_result=$this->result_push($result_one,$result_two,$result_three);
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
            $ordermodel->where("user_id='{$user_id}' and qi_shu='{$qi_shu}'")->save($row);
            
            //余额写入表
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




