@extends('master')
@section('title')
    {{$section->title}}
    @endsection

@section('headlinks')
    <link rel="stylesheet" href = "{{asset('css/course_detail.css')}}">
@endsection
@section('content')
    <div class="grid course-detail md:grid-cols-2 md:w-9/12 gap-10  mt-16 ml-auto mr-auto justify-center">
        @if($section->content_type == 'video')
        <iframe class = "lessonplayer" width="560" height="315" src="{{$section->content}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        @else
        <div class="text-lesson">{!! $section->content !!}</div>
        @endif


        <div class="sectionscontainer">

            <h4 class="text-center font-bold border-bottom self-center pb-5">Course Content</h4>
            <div class="sections">

                @foreach($course->sections as $thissection)
                   
                        <a href ={{url("courses/".$course->id."/".$thissection->id)}}><p class="font-bold">Section {{$thissection->id}}:  {{$thissection->title}}</p></a>
                @endforeach
            </div>
        </div>


        <div class="description grid">
            <h1 class="title font-bold text-orange-600 text-3xl">{{$course->name}}</h1>
            <h5>{{$course->description}}</h5>

        </div>


    </div>
@endsection



