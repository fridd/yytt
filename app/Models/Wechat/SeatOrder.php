<?php

namespace App\Models\Wechat;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SeatOrder extends Model
{
    /**
     * 数据表名
     * @var [type]
     */
    protected $table = 'seat_orders';

    /**
     * 自动填充的字段
     * @var [type]
     */
    protected $fillable = ['activity_id', 'order_id', 'seats', 'num', 'openid', 'nickname', 'phone', 'name', 'username', 'status'];

    /**
     * 订单关联的活动
     *
     * @return mixed
     */
    public function activities()
    {
        return $this->belongsTo(SeatActivity::class, 'activity_id', 'id');
    }
}
