<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Assessment;

class AssessmentItem extends Model
{
    public function assessment() {
        return $this->belongsTo('Assessment');
    }
}
