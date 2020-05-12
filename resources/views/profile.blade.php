@extends('layouts.app')

@section('content')
<div class="max-w-sm mx-auto my-auto border border-gray-500 rounded overflow-hidden shadow-lg">
    @if(Auth::user()->avatar)
        <img class="w-full" src="/storage/{{auth()->user()->avatar}}" alt="Profile Picture">
    @endif
    <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">{{$user->name}}</div>
        <p class="text-gray-700 text-base">
            {{$user->email}}
        </p>
    </div>
    
    <div class="px-6 py-2">
        <a href = "{{route('user.edit', ['user' => $user])}}" class="inline-block bg-gray-400 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">Edit Profile</a>
    </div>
</div>
@endsection