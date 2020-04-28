<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\EnrolmentLesson;
use App\Section;

class Lesson extends Model
{
    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function enrolments()
    {
        return $this->hasMany(EnrolmentLesson::class);
    }
}
