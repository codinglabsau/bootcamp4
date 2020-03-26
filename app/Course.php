<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Section;

class Course extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function sections()
    {
        return $this->hasMany(Section::class);
    }
}
