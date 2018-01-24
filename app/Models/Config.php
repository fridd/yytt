<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{   
    // 指定表名
    protected $table = 'configs';

    // 设置字段
    protected $fillable = ['name', 'title', 'extra', 'remark', 'value', 'sort', 'site_id'];

}
