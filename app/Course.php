<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    function students()
    {
       return $this->belongsToMany('App\Student');
    }

    function sections()
    {
        return $this->hasMany('App\Section');
    }
}
