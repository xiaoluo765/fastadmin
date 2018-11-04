<?php

namespace app\admin\model;

use think\Model;

class Service extends Model
{
    // 表名
    protected $name = 'service';
    
    // 自动写入时间戳字段
    protected $autoWriteTimestamp = false;

    // 定义时间戳字段名
    protected $createTime = false;
    protected $updateTime = false;
    
    // 追加属性
    protected $append = [
        'status_text',
        'post_status_text'
    ];
    

    
    public function getStatusList()
    {
        return ['0' => __('Status 0'),'1' => __('Status 1')];
    }     

    public function getPostStatusList()
    {
        return ['0' => __('Post_status 0'),'1' => __('Post_status 1'),'2' => __('Post_status 2')];
    }     


    public function getStatusTextAttr($value, $data)
    {        
        $value = $value ? $value : (isset($data['status']) ? $data['status'] : '');
        $list = $this->getStatusList();
        return isset($list[$value]) ? $list[$value] : '';
    }


    public function getPostStatusTextAttr($value, $data)
    {        
        $value = $value ? $value : (isset($data['post_status']) ? $data['post_status'] : '');
        $list = $this->getPostStatusList();
        return isset($list[$value]) ? $list[$value] : '';
    }




}
