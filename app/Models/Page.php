<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
	use SoftDeletes;

    protected $table = "pages";

    protected $fillable =  ['title', 'keys', 'digest', 'seo_title', 'seo_key', 'seo_description',  'content', 'user_id', 'channel_id', 'thumb', 'status', 'view', 'publish_at', 'site_id','newimg'];

	protected $date = ['publish_at'];

	public function channel()
	{
		// 一对一关联
		return  $this->hasOne('App\Models\Channel','channel_id','id');
	}
}