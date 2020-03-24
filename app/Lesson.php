<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    public function section() {
        return $this->belongsTo('Section');
    }
}
