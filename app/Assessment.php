<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\AssessmentItem;

class Assessment extends Model
{
    public function assessmentItems()
    {
        return $this->hasMany(AssessmentItem::class);
    }
}
