<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
// 不知道为什么会出这个错误，  只要填了这些代码就会报错
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable
{
    use Notifiable;
    // 这将会建立User与Role之间的关联关系
    use EntrustUserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // 在数组中隐藏的属性
    // 在模型数组或JSON显示中隐藏某些属性   // 在这里是密码和忘记密码
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = [
        'created_at',
    ];
}
