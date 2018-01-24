<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Banner extends Model
{
	use SoftDeletes;

    protected $table = 'banners';

    protected $fillable = ['title', 'digest', 'seo_title', 'seo_key',
							'seo_description',  'content', 'seo_title', 'seo_key',
							'seo_description', 'user_id', 'thumb',
							'status', 'view', 'publish_at', 'blank', 'url'];
							

	protected $dates = ['publish_at'];
}
