<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MessageBoard extends Model
{
    protected $table = 'message_board';

    protected $fillable = ['name', 'tel', 'email', 'city', 'address', 'content', 'message_type_id'];

}
