<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Section;
use App\AssessmentItem;

class Assessment extends Model
{
    public function section() {
        return $this->belongsTo('Section');
    }

    public function assessmentItems() {
        return $this->hasMany('AssessmentItem');
    }
}
