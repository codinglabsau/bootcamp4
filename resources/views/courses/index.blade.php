@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-12">
        <div class="flex flex-col">
            <div class="flex flex-col items-center">
                <h1 class="text-3xl font-semibold">Become a Developer</h1>
                <img class="w-1/3 py-4" src="https://d2wks4gidu9630.cloudfront.net/b3f9334c-fcd6-46b8-84fc-71888d900aab/svg/underline.svg"
                     alt="Orange underline" />
            </div>
            <div class="flex py-8">
                <div class="flex flex-col items-center justify-center">
                    <p>
                        Become a developer in 12 weeks with our Developer Bootcamp. This program is designed to give you
                    the skills and experience to get a job as a Junior Developer.
                    </p>
                    <p class="py-4">
                        Participants will learn the full LAMP stack including the skills needed to become a proficient
                     frontend and backend developer.
                    </p>
                    <p>
                        You'll build a working app that you can include in your portfolio and showcase your skills to
                        employers looking to hire. You'll benefit from our specialist mentor program to guide your
                        development and offer advice.
                    </p>
                </div>
                <img src="https://drive.google.com/uc?export=view&id=1iJwAMONg6KQ7qz2Olf94Jdp6qIN7uYY8"
                     alt="Image of a student" />
            </div>
            <div class="flex py-12 mt-12">
                @foreach ($courses as $course)
                    <div class="flex flex-col w-1/2 border-2 border-black py-4 pb-8 {{ $loop->index % 2 == 1 ? 'ml-4' : 'mr-4' }}">
                        <div class="self-start py-6 px-8 -mt-4 absolute bg-black text-white {{ $loop->index % 2 == 1 ? 'invisible' : ''}}">
                            30% off
                        </div>
                        <div class="py-6 text-center self-center">
                            <p class="text-xl font-semibold">{{ $course->name }}</p>
                            <p class="py-2 text-sm">{{ $loop->index % 2 == 1 ? '12 Week Classroom-Based' : 'Self-Paced Online' }}</p>
                        </div>
                        @foreach ($course->description as $description)
                            <div class="flex px-8 py-3 items-center">
                                <svg class="w-6 h-6 text-teal-300 absolute" fill="none" viewBox="0 0 20 20">
                                    <circle cx="10" cy="10" r="8" stroke="currentColor" stroke-width="4"/>
                                    <circle cx="10" cy="10" r="3" fill="currentColor"/>
                                </svg>
                                <p class="px-4 ml-8">{{ $description }}</p>
                            </div>
                        @endforeach
                        <div class="flex flex-col py-10 items-center">
                            <div class="flex">
                                <p>$</p>
                                <p class="text-2xl">{{ $course->price }}</p>
                            </div>
                            <p class="text-xs py-2">{{ $loop->index % 2 == 1 ? ':: next intake March 2020 ::' : ':: lifetime access ::' }}</p>
                        </div>
                        <a class="w-1/2 self-center px-8 py-8 bg-teal-300 text-white text-center text-xl font-semibold hover:bg-teal-200    " href="#">
                            View Course
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
