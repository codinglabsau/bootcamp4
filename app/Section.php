<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Course;
use App\Lesson;
use App\Assessment;

class Section extends Model
{
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function assessment()
    {
        return $this->hasOne(Assessment::class);
    }
}
