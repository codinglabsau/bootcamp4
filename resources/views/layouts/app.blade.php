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
<body class="h-screen antialiased leading-none">
    <div id="app">
        <nav class="bg-white fixed w-full shadow mb-8 py-6">
            <div class="container mx-auto px-6 md:px-0">
                <div class="flex items-center justify-center">
                    <div class="mr-6">
                        <a href="{{ url('/') }}" class="text-lg font-semibold text-black no-underline">
                            <img class="object-contain h-7" src="data:image/png;base64,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">
                        </a>
                    </div>
                    <div class="flex-1 text-right">
                        @guest
                            <a class="no-underline hover:underline text-black text-sm p-3" href="{{ route('login') }}">{{ __('Login') }}</a>
                            @if (Route::has('register'))
                                <a class="no-underline hover:underline text-black text-sm p-3" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        @else
                            <a class="inline-block py-2 px-4 text-black font-bold no-underline" href="/home">Dashboard</a>

                            <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="/quiz">Quiz</a>

                            
                            <img class="inline-block rounded-full h-15 w-15 mr-4" src="https://cdn.i-scmp.com/sites/default/files/styles/768x768/public/d8/images/methode/2019/11/04/37716de6-fee6-11e9-93ee-a5388fc1b87d_image_hires_174946.jpg?itok=81dBdlex&v=1572860994">

                            <a href="{{ route('logout') }}"
                               class="mx-auto lg:mx-0 hover:underline bg-white text-black rounded-full ml-4 lg:mt-0 py-4 px-8 shadow opacity-100"
                               onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                {{ csrf_field() }}
                            </form>
                        @endguest
                    </div>
                </div>
            </div>
        </nav>

        

        @yield('content')
    </div>

    <!-- Scripts -->
    <!-- <script src="{{ mix('js/app.js') }}"></script> -->
</body>
</html>
