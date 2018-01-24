<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Channel extends Model
{
	use SoftDeletes;
	/**
     * 数据表名
     * @var [type]
     */
    protected $table = 'channels';

	/**
     * 自动填充的字段
     * @var [type]
     */
    protected $fillable = ['pid', 'title', 'title_en', 'url', 'sort', 'status', 'site_id', 'target', 'single', 'thumb'];

}
