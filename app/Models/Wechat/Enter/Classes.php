<?php

namespace App\Models\Weixin\Enter;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $table = 'weixin_enter_classes';

    protected $fillable = ['name', 'phone', 'area', 'course'];
}
