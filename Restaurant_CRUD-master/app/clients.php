<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clients extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'user_id',
        'name',
        'email',
        'contact',
        'password'
    ];
}
