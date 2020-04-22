<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Section;

class Course extends Model
{
    protected $casts = [
        'description' => 'array'
    ];

    public function path()
    {
        return "courses/{$this->id}";
    }

    public function sections()
    {
        return $this->hasMany(Section::class);
    }
}
