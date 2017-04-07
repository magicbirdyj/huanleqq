<?php
namespace Home\Model;
use Think\Model;

class  UsersModel extends Model {
    protected $fields=array(
        'user_id','open_id','phone','head_url', 'birthday',
       'reg_time', 'last_login','balance','red_pack',
        '_pk'=>'user_id','_autoinc'=>true
    );
}
