<?php
namespace Home\Model;
use Think\Model;

class  Order_goodsModel extends Model {
    protected $fields=array(
        'rec_id','order_id','guess_id','goods_name','goods_dues', 'goods_profit','_pk'=>'rec_id','_autoinc'=>true
    );
}
