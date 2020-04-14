<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none">
    <div id="app">
        <nav class="bg-white shadow-sm">
            <div class="flex justify-between items-center container mx-auto py-4">
                <a href="{{ url('/') }}">
                    <img class="w-full" src="https://d2wks4gidu9630.cloudfront.net/b3f9334c-fcd6-46b8-84fc-71888d900aab/svg/codinglabs-logo.svg"
                         alt="Coding Labs logo" />
                </a>
                <div class="flex uppercase text-sm">
                    <a class="mr-2 px-4 py-4 border-b-4 border-white hover:border-orange-500" href="#">About</a>
                    <a class="mr-2 px-4 py-4 border-b-4 border-white hover:border-orange-500" href="#">Software</a>
                    <a class="mr-2 px-4 py-4 border-b-4 border-white hover:border-orange-500" href="#">Bootcamp</a>
                    <a class="mr-2 px-4 py-4 border-b-4 border-white hover:border-orange-500" href="#">Open source</a>
                    <a class="px-8 py-4 bg-black text-white hover:opacity-75" href="#">Lets chat</a>
                        @guest
                            <a class="w-10 h-10 ml-4 py-1" href="{{ route('login') }}">
                                <svg fill="currentColor" viewBox="0 0 20 20">
                                    <path stroke="#000" d="M6 2.5h9M15.5 2v15M16 17.5H6M6.5 3v4M6.5 17v-4"/>
                                    <path d="M13.354 10.354a.5.5 0 000-.708l-3.182-3.182a.5.5 0 00-.708.708L12.293 10l-2.829 2.828a.5.5 0 10.708.708l3.182-3.182zM4 10.5h9v-1H4v1z" fill="#000"/>
                                </svg>
                            </a>
{{--                            @if (Route::has('register'))--}}
{{--                                <a class="no-underline hover:underline text-gray-300 text-sm p-3" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                            @endif--}}
                        @else
                            <span class="text-gray-300 text-sm pr-4">{{ Auth::user()->name }}</span>

                            <a href="{{ route('logout') }}"
                               class="no-underline hover:underline text-gray-300 text-sm p-3"
                               onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                <svg fill="currentColor" viewBox="0 0 20 20">
                                    <path stroke="#000" d="M13.003 17.571l-8-.057M4.5 18V3M4.004 2.5l8.999.064M12.5 18v-5M12.5 1.993l.071 5.064"/>
                                    <path d="M18.354 10.354a.5.5 0 000-.708l-3.182-3.182a.5.5 0 10-.708.708L17.293 10l-2.829 2.828a.5.5 0 10.708.708l3.182-3.182zM9 10.5h9v-1H9v1z" fill="#000"/>
                                </svg>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                {{ csrf_field() }}
                            </form>
                        @endguest
                </div>
            </div>
        </nav>
        <div class="h-screen">
            @yield('content')
        </div>

        <footer class="bg-black text-white px-12">
            <div class="flex flex-col">
                <div class="flex container justify-between mx-auto py-12">
                    <div class="flex flex-col">
                        <a class="w-32" href="#">
                            <img class="w-full" src="https://d2wks4gidu9630.cloudfront.net/b3f9334c-fcd6-46b8-84fc-71888d900aab/svg/logo-footer.svg"
                                 alt="Coding Labs footer logo" />
                        </a>
                        <p class="py-6 uppercase">Gold coast australia</p>
                        <div class="flex">
                            <a class="mr-4" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" xml:space="preserve" class="w-6 h-6 fill-current text-white"><title>LinkedIn</title> <path d="M91.6,90c-6,0-11.8,0-17.8,0c0-3.2,0-6.2,0-9.3c0-6.5,0-13.1,0-19.6c0-1.6-0.2-3.2-0.5-4.7
                                    c-1-4.8-4.1-7.5-8.5-7.5c-4.6,0.1-8.7,3.3-9.5,7.7c-0.3,1.6-0.4,3.3-0.4,5c0,9.4,0,18.7,0,28.2c-5.9,0-11.7,0-17.6,0
                                    c0-17.9,0-35.7,0-53.7c5.8,0,11.4,0,17.5,0c0,2.2,0,4.4,0,7.2c0.7-0.6,1-0.8,1.2-1c5.3-7.2,12.6-8.7,20.8-6.8
                                    c8,1.8,12.3,7.5,14.1,15.2c0.6,2.6,0.9,5.2,0.9,7.9c0.1,9.9,0,19.8,0,29.7C91.7,88.8,91.7,89.3,91.6,90z"></path> <path d="M27,90c-5.9,0-11.6,0-17.5,0c0-17.9,0-35.7,0-53.7c5.7,0,11.5,0,17.5,0C27,54,27,71.9,27,90z"></path> <path d="M18.3,28.6c-5.9,0-10-3.8-10.1-9.2c0-5.3,4.2-9.3,10-9.4c5.7-0.1,10,3.9,10,9.3C28.3,24.8,24.2,28.6,18.3,28.6
                                z"></path></svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 fill-current text-white"><title>GitHub</title> <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207
                                                11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729
                                                1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931
                                                0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399
                                                3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84
                                                1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823
                                                2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386
                                                0-6.627-5.373-12-12-12z"></path></svg>
                            </a>
                        </div>
                    </div>
                    <div class="flex flex-col text-sm pt-6">
                        <a class="py-1" href="#">Build</a>
                        <a class="py-1" href="#">Fix</a>
                        <a class="py-1" href="#">Support</a>
                        <a class="py-1" href="#">Technology</a>
                    </div>
                    <div class="flex flex-col text-sm pt-6">
                        <a class="py-1" href="#">Case studies</a>
                        <a class="py-1" href="#">Blog</a>
                        <a class="py-1" href="#">Bootcamp</a>
                        <a class="py-1" href="#">Careers</a>
                    </div>
                    <img src="https://d2wks4gidu9630.cloudfront.net/b3f9334c-fcd6-46b8-84fc-71888d900aab/svg/footer-arrow.svg"
                         alt="Swirly arrow" />
                    <div class="flex flex-col w-1/5 text-sm">
                        <p class="leading-loose">We build fast, scalable, affordable and secure web and mobile applications for innovative
                            businesses.</p>
                        <a class="py-2 text-orange-500" href="#">Let's chat</a>
                    </div>
                </div>
                <p class="text-xs text-center py-2">&copy; Coding Labs Pty Ltd 2018-2020 | <a href="#">Privacy</a></p>
            </div>
        </footer>
    </div>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
