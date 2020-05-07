@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-12">
        <div class="flex flex-col">
            @include('users.navigation.user_navigation')
        </div>

        @forelse (auth()->user()->enrolments as $enrolment)
            <div class="flex items-center justify-between px-8 py-4 bg-white rounded-lg shadow-lg text-white">
                <img class="w-32" src="{{ asset('images/imgs/laravel-logo.png') }}" alt="Course Logo" />
                <h1 class="text-2xl text-gray-800">
                    {{ $enrolment->course->name }}
                </h1>
                <button class="px-8 py-6 bg-blue-400 rounded-full focus:outline-none" onclick="showDetailedEnrolmentStatistics({{ $enrolment->course->id }})">
                    View Progress
                </button>
                <a class="px-8 py-6 bg-green-400 rounded-full" href="{{ route('course.show', $enrolment->course) }}">
                    View Course
                </a>
            </div>
            @include('users.modal.course_breakdown_modal')
        @empty
            <p>You are not enrolled in any courses.</p>
        @endforelse

        </div>

    </div>

    <script>
        function showDetailedEnrolmentStatistics(enrolment_id) {
            let modal = document.getElementById(`enrolment_${enrolment_id}`);
            modal.classList.remove('hidden');
        }
    </script>
@endsection
