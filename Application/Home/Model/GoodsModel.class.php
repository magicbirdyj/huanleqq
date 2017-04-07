<?php
namespace Home\Model;
use Think\Model;

class  GoodsModel extends Model {
    protected $fields=array(
        'goods_id','guess_id', 'goods_name','goods_img', 'odds','is_delete',
        '_pk'=>'goods_id','_autoinc'=>true
    );
}
