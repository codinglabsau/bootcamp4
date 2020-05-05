@extends('layouts.app')

@section('content')

    <div class="container mx-auto">

        <div class="flex flex-col">

            <div class="flex py-8 text-sm">
                <a href="{{ route('courses') }}">
                    <span class="text-blue-400">
                        Courses
                    </span>
                </a>
                <p class="text-gray-700">
                    &nbsp;/ {{ $course->name }}
                </p>
            </div>

            <div style="height:150px" class="flex mb-8 bg-white border rounded shadow">
                <img class="px-8 h-36" src="{{ asset('images/imgs/laravel-logo.png') }}" alt="Laravel Logo"/>
                <svg class="h-full text-laravel" preserveAspectRatio="none" viewBox="0 0 100 100">
                    <polygon points="0,0 100,0 100,100 0,0" fill="currentColor"/>
                </svg>
                <div class="flex-1 h-full flex items-center text-white text-2xl bg-laravel rounded-r">
                    <h1 class="flex-1 px-12">
                        {{ $course->name }}
                    </h1>
                </div>
            </div>

            @guest
                <div class="px-10 py-6 mr-12 ml-12 mb-8 rounded bg-blue-100 text-gray-700 text-center">
                    <p>
                        To access this course content please
                        <a class="font-semibold text-blue-600" href="{{ route('login') }}">
                            Login
                        </a>
                        or
                        <a class="font-semibold text-blue-600" href="{{ route('register') }}">
                            Register.
                        </a>
                    </p>
                </div>
            @endguest
            @auth
                @if (!auth()->user()->hasAccess($course))
                    <div class="px-10 py-6 mr-12 ml-12 mb-8 rounded bg-blue-100 text-gray-700 text-center">
                        <p>
                            You do not have access to this course content. To purchase this course, click
                            <a class="font-semibold text-blue-600" href="#">
                                here.
                            </a>
                        </p>
                    </div>
                @endif
            @endauth

            <button id="up" onclick="toggleSections()" class="pb-12 self-center text-gray-400 hover:text-gray-600 hidden
                    focus:outline-none">
                <svg width="25" height="12" viewBox="0 0 25 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line x1="1.5" y1="-1.5" x2="14.297" y2="-1.5"
                          transform="matrix(-0.774134 -0.633022 0.652493 -0.757795 25 10)" stroke="#A6A6A6"
                          stroke-width="3" stroke-linecap="round"/>
                    <line x1="1.5" y1="-1.5" x2="14.297" y2="-1.5"
                          transform="matrix(-0.774134 0.633022 -0.652493 -0.757795 12.229 0)"
                          stroke="#A6A6A6" stroke-width="3" stroke-linecap="round"/>
                </svg>
            </button>


            <div id="sectionOne" class="flex px-10 pb-12 flex-wrap justify-between text-gray-700">
                @foreach ($course->sections->take(6) as $section)
                    <div class="flex flex-col w-1/4 px-8 py-4 mr-2 ml-2 mb-10 bg-white items-center text-xl text-center
                                shadow rounded">
                        <h2 class="font-semibold">
                            {{ $section->name }}
                        </h2>
                        <p class="flex-1 py-6 text-sm">
                            {{ $section->overview }}
                        </p>
                        @auth
                            @if (auth()->user()->hasAccess($course))
                                <a class="px-10 py-4 rounded bg-blue-400 text-white hover:bg-blue-300" href="#">
                                    @if (auth()->user()->enrolments->where('course_id', $course->id)->first()
                                        ->sectionComplete($section))
                                        Review
                                    @elseif (auth()->user()->enrolments->where('course_id', $course->id)->first()
                                           ->sectionStarted($section))
                                        Continue
                                    @else
                                        Begin
                                    @endif
                                </a>
                            @endif
                        @endauth
                    </div>
                @endforeach
            </div>

            <div id="sectionTwo" class="flex px-10 pb-12 flex-wrap justify-between text-gray-700 hidden">
                @foreach ($course->sections->take(-6) as $section)
                    <div class="flex flex-col w-1/4 px-8 py-4 mr-2 ml-2 mb-10 bg-white items-center text-xl text-center
                                shadow rounded">
                        <h2 class="font-semibold">
                            {{ $section->name }}
                        </h2>
                        <p class="flex-1 py-6 text-sm">
                            {{ $section->overview }}
                        </p>
                        @auth
                            @if (auth()->user()->hasAccess($course))
                                <a class="px-10 py-4 rounded bg-blue-400 text-white hover:bg-blue-300" href="#">
                                    Begin
                                </a>
                            @endif
                        @endauth
                    </div>
                @endforeach
            </div>

            <button id="down" onclick="toggleSections()" class="pb-12 self-center text-gray-400 hover:text-gray-600
                    focus:outline-none">
                <svg width="25" height="12" viewBox="0 0 25 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line x1="1.5" y1="-1.5" x2="14.297" y2="-1.5" transform="matrix(0.774134 0.633022 -0.652493
                       0.757795 0 2)" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                    <line x1="1.5" y1="-1.5" x2="14.297" y2="-1.5" transform="matrix(0.774134 -0.633022 0.652493
                       0.757795 12.771 12)" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                </svg>
            </button>

        </div>

    </div>

    <script>
        function toggleSections() {
            let sectionOne = document.getElementById('sectionOne').classList;
            let sectionTwo = document.getElementById('sectionTwo').classList;
            let down = document.getElementById('down').classList;
            let up = document.getElementById('up').classList;

            sectionOne.contains('hidden') ? sectionOne.remove('hidden') : sectionOne.add('hidden');
            sectionTwo.contains('hidden') ? sectionTwo.remove('hidden') : sectionTwo.add('hidden');
            down.contains('hidden') ? down.remove('hidden') : down.add('hidden');
            up.contains('hidden') ? up.remove('hidden') : up.add('hidden');
        }
    </script>

@endsection