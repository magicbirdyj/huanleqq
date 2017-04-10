<?php
namespace Home\Model;
use Think\Model;

class  PreresultModel extends Model {
    protected $fields=array(
        'preresult_id','preresult_num', 'result','preresult_time', 
        '_pk'=>'preresult_id','_autoinc'=>true
    );
}
