<?php
namespace Home\Model;
use Think\Model;

class  Wxpay_orderModel extends Model {
    protected $fields=array(
        'wxpay_id','wxpay_user_id', 'wxpay_no','wxpay_dues','wxpay_time',
        '_pk'=>'wxpay_id','_autoinc'=>true
    );
}
