@extends('layouts.app')

@section('content')
{{--    <div class="flex items-center">--}}
{{--        <div class="md:w-1/2 md:mx-auto">--}}

{{--            @if (session('status'))--}}
{{--                <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">--}}
{{--                    {{ session('status') }}--}}
{{--                </div>--}}
{{--            @endif--}}

{{--            <div class="flex flex-col break-words bg-white border border-2 rounded shadow-md">--}}

{{--                <div class="font-semibold bg-gray-200 text-gray-700 py-3 px-6 mb-0">--}}
{{--                    Dashboard--}}
{{--                </div>--}}

{{--                <div class="w-full p-6">--}}
{{--                    <p class="text-gray-700">--}}
{{--                        You are logged in!--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="sidebar w-2/3 p-3 fixed top-0 left-0 bottom-0 bg-orange-500 text-white font-sans flex flex-col overflow-scroll sm:hidden">
            <div class = "grid mb-20">
                <img class = "w-2/3 ml-auto mr-auto rounded-full" src = "https://storage.googleapis.com/stateless-campfire-pictures/2019/05/e4629f8e-defaultuserimage-15579880664l8pc.jpg" alt = "userimage"/>
                <span class = "ml-auto mr-auto row-auto mt-4 text-2xl text-bold">Username</span>
            </div>
            <div class = "navigationlinks flex flex-col p-10">
                <span class = "flex w-11/12   ml-auto mr-auto mt-5 mb-5 items-center">
                    <img class = "w-1/5 mr-8" src = 'icons/percentage.png'/>
                    Course Overview
                </span>
                <span class = "flex w-11/12  ml-auto mr-auto mt-5 mb-5 items-center ">
                    <img class = "w-1/5 mr-8" src = "icons/user.png"/>
                    Account
                </span>
                <span class = "flex w-11/12  ml-auto mr-auto mt-5 mb-5 items-center ">
                    <img class = "w-1/5 mr-8" src = "icons/credit-card.png"/>
                    Payment Details
                </span>
                <span class = "flex w-11/12  ml-auto mr-auto mt-5 mb-5 items-center ">
                    <img class = "w-1/5 mr-8" src = "icons/logout.png"/>
                    Logout
                </span>

            </div>
    </div>

    <div class = "dashboardbox flex md:w-2/3 xl:w-1/2 rounded-lg bg-gray-100 ml-auto mr-auto mt-24 mb-24">

        <div class = "leftsection w-1/4 bg-orange-500 pt-10 pb-10  rounded-lg text-white">
            <div class = "grid mb-20 pl-5">
                <img class = "w-2/3 ml-auto mr-auto rounded-full" src = "https://storage.googleapis.com/stateless-campfire-pictures/2019/05/e4629f8e-defaultuserimage-15579880664l8pc.jpg" alt = "userimage"/>
                <span class = "ml-auto mr-auto row-auto mt-4 text-2xl text-bold">Username</span>
            </div>
            <div class = "navigationlinks bg-orange-400 flex flex-col border-t-2 border-b-2 pl-5">
                <span class = "flex w-11/12 text-sm   ml-auto mr-auto mt-5 mb-5 items-center">
                    <img class = "w-1/5 mr-8" src = 'icons/percentage.png'/>
                    Course Overview
                </span>
                <span class = "flex w-11/12 text-sm ml-auto mr-auto mt-5 mb-5 items-center ">
                    <img class = "w-1/5 mr-8" src = "icons/user.png"/>
                    Account
                </span>
                <span class = "flex w-11/12 text-sm ml-auto mr-auto mt-5 mb-5 items-center ">
                    <img class = "w-1/5 mr-8" src = "icons/credit-card.png"/>
                    Payment Details
                </span>
                <span class = "flex w-11/12 text-sm ml-auto mr-auto mt-5 mb-5 items-center ">
                    <img class = "w-1/5 mr-8" src = "icons/logout.png"/>
                    Logout
                </span>

            </div>
        </div>

        <div class = "rightsection">

        </div>


    </div>

</div>
@endsection
