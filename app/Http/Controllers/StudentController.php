<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{

    function showcourses()
    {
        $courses = Auth::user()->student->courses;
        return view(student_courses);
    }

}
