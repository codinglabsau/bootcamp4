<?php

namespace App;

use App\Enrolment;
use App\AssessmentItem;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Relations\Pivot;

class EnrolmentAssessmentItem extends Pivot
{
    public $timestamps = true;
    protected $dates = [
        'created_at'
    ];

    public function enrolment()
    {
        return $this->belongsTo(Enrolment::class);
    }

    public function assessmentItem()
    {
        return $this->belongsTo(AssessmentItem::class);
    }

    public function getMark()
    {
        return $this != null ? $this->mark : '-';
    }

    public function getAssessmentStatus()
    {
        return $this->mark < 5 ? 'text-red-500' : 'text-green-500';
    }

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->isoFormat('lll');
    }
}
