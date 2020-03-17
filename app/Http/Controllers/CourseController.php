<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use Illuminate\Support\Facades\Auth;
use MongoDB\Driver\Session;

class CourseController extends Controller{
    function index()
    {
        $courses = Course::all();
        return view("/Courses/courses")->with('courses',$courses);
    }

    function show(Course $course)
    {

        $enrolled = false;
    if(Auth::user()) {
        $student = Auth::user()->student;


        foreach ($student->courses as $eachcourse) {
            if ($eachcourse->id == $course->id) {
                $enrolled = true;
            }

        }

    }

        return view("/Courses/course_detail")->with('course',$course)->with('enrolled',$enrolled)->with('sections',$course->sections);

    }

    function section(Course $course, $sectionid)
    {
        return view("/Courses/section_lesson")->with('course',$course)->with('section',$course->sections()->where('id', $sectionid )->get()[0]);
    }

    function buy(Course $course)
    {

        $student = Auth::user()->student;
        $student->courses()->syncWithoutDetaching($course->id);
        return redirect('/courses/'.$course->id);

    }

    function studentCourses()
    {
        $courses = Auth::user()->student->courses;
        return view("/Courses/courses")->with('courses',$courses);
    }


}
