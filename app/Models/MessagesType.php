<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class MessagesType extends Model
{
	use SoftDeletes;
	
    protected $table = 'message_type';

	// 字段
    protected $fillable = ['type'];
}
