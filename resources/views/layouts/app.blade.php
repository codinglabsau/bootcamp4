<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="h-screen antialiased leading-none bg-white">
<div id="app" class="h-full flex flex-col">

    <nav class="bg-white shadow-sm">
        <div class="flex justify-between items-center container mx-auto py-4">
            <a href="{{ url('/') }}">
                <img class="w-full" src="{{ asset('images/codinglabs-logo.svg') }}"
                     alt="Coding Labs logo" />
            </a>
            <div class="flex items-center uppercase text-sm">
                @guest
                    <a class="mr-2 px-4 py-4 border-b-4 border-white hover:border-orange-500
                                 {{ Route::is('courses') ? 'border-orange-500' : ''}}" href="{{ route('courses') }}">
                        Bootcamp
                    </a>
                    <a class="px-8 py-6 bg-black text-white hover:opacity-75" href="{{ route('login') }}">
                        Login
                    </a>
                @else
                    @if(Auth::user()->avatar)
                        <img src="/storage/{{auth()->user()->avatar}}" alt="Profile Pic" class="w-12 h-12 rounded-full object-cover">
                    @endif

                    <a href = "/profile" class="p-3 text-gray-300 text-sm">{{ Auth::user()->name }}</a>

                    <a class="px-8 py-6 bg-black text-white hover:opacity-75" href="{{ route('logout') }}"
                       onclick="event.preventDefault();document.getElementById('logout-form').submit()">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                    </form>
                @endguest
            </div>
        </div>
    </nav>

    <div class="h-full">
        @yield('content')
    </div>

    <footer class="relative bottom-0 w-full bg-black text-white px-12">
        <div class="flex flex-col">
            <div class="flex container justify-between mx-auto py-12">
                <div class="flex flex-col">
                    <p class="py-6 uppercase">
                        Gold coast australia
                    </p>
                </div>
                <img src="{{ asset('images/footer-arrow.svg') }}"
                     alt="Swirly arrow" />
                <div class="flex flex-col w-1/5 text-sm">
                    <p class="leading-loose">We build fast, scalable, affordable and secure web and mobile
                        applications for innovative businesses.
                    </p>
                </div>
            </div>
            <p class="text-xs text-center py-2">
                &copy; Coding Labs Pty Ltd 2018-2020
            </p>
        </div>
    </footer>

</div>
</body>
</html>
