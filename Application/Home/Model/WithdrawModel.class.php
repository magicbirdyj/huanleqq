<?php
namespace Home\Model;
use Think\Model;

class  WithdrawModel extends Model {
    protected $fields=array(
        'withdraw_id','withdraw_no','user_id', 'withdraw_dues', 'payment_no','withdraw_time','payment_time',
        '_pk'=>'withdraw_id','_autoinc'=>true
    );
}
