<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
