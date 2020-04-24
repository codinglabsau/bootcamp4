@extends('layouts.app')

@section('content')
    @auth
        @forelse (auth()->user()->enrolments as $enrolment)
            <div class="container mx-auto py-12">
                <button onclick="showDetailedEnrolmentStatistics({{ $enrolment->course->id }})" class="bg-blue-300 px-8 py-4 text-xl rounded hover:bg-blue-200 focus:outline-none">Test Modal</button>
                @include('users.modal.course_breakdown_modal')
            </div>
        @empty
            <div> You aren't enrolled in any courses.</div>
        @endforelse
    @endauth
    @guest
        <p>Login to view detailed course overview.</p>
    @endguest
    <script>
        function showDetailedEnrolmentStatistics(enrolment_id) {
            let modal = document.getElementById(`enrolment_${enrolment_id}`);
            modal.classList.remove('hidden');
        }
    </script>
@endsection
