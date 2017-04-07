<?php
namespace Home\Model;
use Think\Model;

class  OrderModel extends Model {
    protected $fields=array(
        'order_id','user_id','created','qi_shu','result', 'deleted','dues','order_profit',
        '_pk'=>'order_id','_autoinc'=>true
    );
}
