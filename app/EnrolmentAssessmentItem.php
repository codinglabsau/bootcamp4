<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Enrolment;
use App\AssessmentItem;

class EnrolmentAssessmentItem extends Model
{
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
}
