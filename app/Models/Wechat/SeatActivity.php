<?php

namespace App\Models\Wechat;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SeatActivity extends Model
{
    use SoftDeletes;

    /**
     * 需要格式化为日期的字段
     * @var [type]
     */
    protected $dates = ['publish_at'];

    /**
     * 需要填充的数据
     * @var [type]
     */
    protected $fillable = ['name', 'sort', 'status', 'price', 'max_seat', 'contact', 'publish_at'];
}
