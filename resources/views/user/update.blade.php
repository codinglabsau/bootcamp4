@extends('layouts.app')

@section('content')

<div class="w-screen">
    <div class="flex justify-center items-center">   
        @if(count($errors))
            @foreach($errors->all() as $error)
                <p class="mr-24 mb-4 text-sm text-red-600">
                    *{{$error}}*
                </p>
            @endforeach
        @endif
    </div>
</div>

<form enctype="multipart/form-data" action="{{route('user.update', ['user' => $user])}}" method="post">
    {{csrf_field()}}
    {{ method_field('PUT') }}
    
    <div class="w-screen">
        <div class="flex justify-center items-center">
            <label class="w-48 text-gray-800 font-bold md:text-right mb-1 pr-4">
                Name:
            </label>

            <div class="w-2/6">
                <input value="{{$user->name}}" name="name" class="bg-gray-200 appearance-none border border-gray-400 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" type="text" placeholder="Enter To-Do">
            </div>
        </div>

        <div class="my-5 flex justify-center items-center">
            <label class="w-48 text-gray-800 font-bold md:text-right mb-1 pr-4">
                Email:
            </label>

            <div class="w-2/6">
                <input value="{{$user->email}}" name="email" class="bg-gray-200 appearance-none border border-gray-400 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" type="text" placeholder="Enter To-Do">
            </div>
        </div>

        <div class="my-5 flex justify-center items-center">
            <label class="w-48 text-gray-800 font-bold md:text-right mb-1 pr-4">
                Profile Pic:
            </label>

            <div class="w-2/6">
                <input type="file" name="avatar" class="bg-gray-200 appearance-none border border-gray-400 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" type="text" placeholder="Enter To-Do">
            </div> 
        </div>

        <div class="my-5 mr-48 flex justify-center items-center">
            <img src="/storage/{{auth()->user()->avatar}}" alt="Profile Pic" class="w-24 h-24 rounded-full object-cover">
        </div>

        <div class="flex justify-center items-center">
            <button type="submit" class="w-32 mr-40 shadow bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" >
                Update
            </button>
        </div>
           
    </div>

    
</form>
@endsection
