<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Assessment;
use App\EnrolmentAssessmentItem;

class AssessmentItem extends Model
{
    public function assessment()
    {
        return $this->belongsTo(Assessment::class);
    }

    public function assessmentItemsTaken()
    {
        return $this->hasMany(EnrolmentAssessmentItem::class);
    }
}
