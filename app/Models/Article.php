<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
	use SoftDeletes;
	
	protected $table = 'articles';

	protected $fillable = ['title', 'digest', 'content', 'source', 'seo_title', 'seo_key',
							'seo_description', 'user_id', 'cate_id', 'thumb',
							'status', 'view', 'publish_at', 'site_id', 'newimg', 'newsint'];

	protected $dates = ['publish_at'];

	public function user()
	{
		return $this->belongsTo(\App\User::class, 'user_id', 'id');
	}
}
