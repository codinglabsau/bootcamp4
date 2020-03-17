@extends('master')
@section('title')
    Courses
@endsection
@section('content')
    <div class="grid justify-center mt-32 items-center text-center gap-10 lg:w-9/12 ml-auto mr-auto lg:grid-cols-2">
    @foreach($courses as $course)

    <a href= "{{url("courses/{$course->id}")}}">
    <div  class="grid text-white items-center rounded-md relative" style="background-image: url({{$course->imageUrl}}); min-height:350px; background-size: cover;"}>
        <div class="h-100 w-100 absolute" style="background-color: rgba(0,0,0,0.35)"></div>
        <h1 class="md:w-2/3 text-center ml-auto mr-auto z-10">{{$course->name}}</h1>


    </div>
    </a>
        @endforeach
    </div>
@endsection
