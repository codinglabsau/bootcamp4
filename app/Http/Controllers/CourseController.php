<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CourseController extends Controller
{
    public function index() {
        $courses = Course::all()->map(function ($course) {
            $course->description = explode('|', $course->description);
            return $course;
        });
        return view('bootcamp.index', ['courses' => $courses]);
    }
}
