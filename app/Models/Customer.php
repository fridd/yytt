<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';

    protected $fillable = ['username', 'sex', 'city', 'sign', 'score', 'mark', 'duty', 'wealth'];
}
