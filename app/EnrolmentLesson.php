<?php

namespace App;
use App\Enrolment;
use App\Lesson;
use Illuminate\Database\Eloquent\Model;

class EnrolmentLesson extends Model
{
    protected $table = 'enrolment_lessons';

    public function enrolment()
    {
        return $this->belongsTo(Enrolment::class);
    }

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
}
