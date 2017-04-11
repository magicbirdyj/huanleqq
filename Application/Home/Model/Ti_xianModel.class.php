<?php
namespace Home\Model;
use Think\Model;

class  Ti_xianModel extends Model {
    protected $fields=array(
        'ti_xian_id','user_id','ti_xian_dues','time',
        '_pk'=>'ti_xian_id','_autoinc'=>true
    );
}
