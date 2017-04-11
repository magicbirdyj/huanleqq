<?php
namespace Home\Model;
use Think\Model;

class  ChargeModel extends Model {
    protected $fields=array(
        'charge_id','user_id', 'charge_no','charge_dues', 'trade_no','pay_type','pay_info','time',
        '_pk'=>'charge_id','_autoinc'=>true
    );
}
