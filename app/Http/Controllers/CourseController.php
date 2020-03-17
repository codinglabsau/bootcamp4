<?php

namespace App\Http\Controllers;

use App\Course;
use App\Http\Resources\Course as CourseResource;
use Illuminate\Http\Request;

use Auth;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Auth::user()->courses()->paginate(5);
        return CourseResource::collection($courses);
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        $course = $request->isMethod('put') ? Course::findOrFail($request->id) : new Course;

        $course->id = $request->input('id');
        $course->title = $request->input('title');
        $course->detail = $request->input('detail');

        $course->save();
        return new CourseResource($course);
    }

    public function show($id)
    {
        return Course::find($id);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        Course::find($id)->delete();

  		$courses = Course::paginate(15);
   		return CourseResource::collection($courses);
    }
}
