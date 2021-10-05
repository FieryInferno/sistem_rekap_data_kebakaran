<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
</head>
<body class="bg-light">
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light shadow-sm bg-white">
            <div class="container-xxl">
                <a class="navbar-brand" href="{{ url('/') }}">
                <img src="/image/logo.png" alt="..." style="width: 25px; object-fit: cover; height:25px;" class="rounded overflow-hidden me-1"> 
                    {{ config('app.name') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        @guest

                        @else
                        <li class="nav-item">
                            <a class="nav-link @if(Request::routeIs('home')) text-primary @endif" href="{{ url('/') }}">
                                Beranda
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(Request::routeIs('data')) text-primary @endif" href="{{ url('/data') }}">
                                Data
                            </a>
                        </li>
                        @endguest
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                @if (Request::routeIs('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Masuk') }}</a>
                                </li>
                                @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrasi') }}</a>
                                </li>
                                @endif
                            @endif
                            
                        @else
                            <li class="nav-item dropdown" > 
                                <a id="navbarDropdown" class="text-secondary nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <img src="/uploads/{{ Auth::user()->image }}" alt="..." style="width: 20px; object-fit: cover; height:20px;" class="rounded me-1 overflow-hidden">
                                {{ Auth::user()->nama }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right border-white shadow-sm" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="">View profile</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
