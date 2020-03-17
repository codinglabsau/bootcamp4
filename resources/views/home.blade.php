<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">    
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
    
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ mix('css/main.css') }}" rel="stylesheet">
    </head>

    <body>                 
        <div id="app">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <router-link :to="{ name: 'home' }" class="nav-item nav-link">Coding Labs</router-link> 
                        </li>
                        <li class="nav-item">
                            <router-link :to="{ name: 'addarticle' }" class="nav-item nav-link">Add Article</router-link> 
                        </li>
                        <li class="nav-item">
                            <router-link :to="{ name: 'about' }" class="nav-item nav-link">About</router-link> 
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>                
                        </li>
                    </ul>
                </div>
            </nav>
        
            <router-view/>
        </div>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        
        <script src="{{asset('js/app.js')}}" ></script>

    </body>
</html>