<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Course;
use App\EnrolmentLesson;
use App\EnrolmentAssessmentItem;

class Enrolment extends Model
{
    protected $guarded = [];

    public function student()
    {
        return $this->belongsTo(User::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function lessons()
    {
        return $this->hasMany(EnrolmentLesson::class);
    }

    public function assessmentItems()
    {
        return $this->hasMany(EnrolmentAssessmentItem::class);
    }
}
