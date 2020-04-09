<?php

namespace App\Http\Controllers;

use App\Course;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all()->map(function ($course) {
            $course->description = explode('|', $course->description);
            return $course;
        });

        return view('bootcamp.index', ['courses' => $courses]);
    }

    public function show(Course $course)
    {
        return view('courses.show', compact('course'));
    }
}
