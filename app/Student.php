<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'user_id'
    ];

    function courses()
    {
        return $this->belongsToMany('App\Course');
    }
}
