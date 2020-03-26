<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Section;

class Lesson extends Model
{
    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
