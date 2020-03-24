<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Course;
use App\Lesson;
use App\Assessment;

class Section extends Model
{
    public function course() {
        return $this->belongTo('Course');
    }

    public function lessons() {
        return $this->hasMany('Lesson');
    }

    public function assessment() {
        return $this->hasOne('Assessment');
    }
}
