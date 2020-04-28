<?php

namespace App;
use App\Enrolment;
use App\Lesson;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Relations\Pivot;

class EnrolmentLesson extends Pivot
{
    public $timestamps = true;

    protected $dates = [
        'created_at'
    ];

    public function enrolment()
    {
        return $this->belongsTo(Enrolment::class);
    }

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->isoFormat('lll');
    }
}
