@extends('master')
@section('title')
    Laravel Course
    @endsection

@section('headlinks')
    <link rel="stylesheet" href = "{{asset('css/course_detail.css')}}">
@section('content')
    <div class="banner">
    <div class="grid course-detail xl:grid-cols-2 md:w-9/12 gap-10 ml-auto mr-auto justify-center">
        <div class="description grid xl:grid-cols-2">
        <img class = "courseimage self-end" src= '{{$course->imageUrl}}' alt = "course image"/>
            <div class="align-self-center">
                <h1 class="title font-bold text-orange-600 text-3xl">{{$course->name}}</h1>
                <h2 class="text-white tools text-xl">Learn to Code using {{$course->tools}}</h2>
            </div>

            <h5 class = "xl:col-span-2 text-xl self-end text-white" >{{$course->description}}</h5>
        </div>


        <div class="sectionscontainer">

        @if(!$enrolled)
                <div class="coursepreviewsection grid w-full xl:w-9/12">
                <iframe class = "coursepreview" src="https://www.youtube.com/embed/0AIjZJ2vqlM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <a class="buylink" href="{{url('/courses/buy/'.$course->id)}}"><button class="p-2 bg-green-400 transition duration-500 hover:bg-green-500 text-white buy text-xl">Buy the Course $ {{$course->price}}</button></a>
                </div>
       @else
            <h4 class="text-center font-bold border-bottom self-center pb-5">Course Content</h4>
            <div class="sections">

                @foreach($sections as $section)
                        <a href = {{url("courses/".$course->id."/".$section->id)}}><p class="font-bold">Section {{$section->id}}:  {{$section->title}}</p></a>
                   

                @endforeach
            </div>
        @endif
        </div>


    </div>
    </div>
@endsection



