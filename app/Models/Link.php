<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Link extends Model
{
	use SoftDeletes;

    protected $table = 'links';

	// 字段
    protected $fillable = ['name', 'url', 'image', 'sort', 'status', 'target', 'classification'];
}
