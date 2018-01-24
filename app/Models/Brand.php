<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brands';

    protected $fillable =  ['title', 'keys', 'enterUrl', 'digest', 'seo_title', 'seo_key', 'seo_description',  'content', 'user_id', 'type', 'thumb', 'status', 'view', 'publish_at'];

	protected $date = ['publish_at'];
}
