<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Map extends Model
{
	use SoftDeletes;

    protected $table = 'maps';

    protected $fillable = ['title', 'keys', 'seo_title', 'seo_key', 'seo_description',  'url', 'city', 'status', 'digest', 'content', 'enterUrl', 'channel_id', 'updated_at'];

    protected $date = ['updated_at'];
}
