<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-dark shadow-sm">

            <div class="container">
                <img src="{{ URL('storage/images/logoP.png') }}" alt="" width="55px" height="55px">
                <a class="btn btn-secondary" href="{{ route('inicio') }}">
                    Plug
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (!Session()->has('loginId'))
                                <li class="nav-item">
                                    <a class="btn btn-secondary" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                                </li>
                            @endif

                            @if (!Session()->has('loginId'))
                                <li class="nav-item">
                                    <a class="btn btn-secondary" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                </li>
                            @endif

                            @if (Session()->has('loginId'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('perfil') }}">{{ __('Perfil') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('salir') }}">{{ __('Cerrar Sesión') }}</a>
                                </li>
                            @endif
                        @else

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end text-bg-secondary" aria-labelledby="navbarDropdown">
                                    <a class="btn btn-warning dropdown-item text-bg-success" href="{{ route('perfil') }}">{{ __('Perfil') }}</a>
                                    <a class="btn btn-warning dropdown-item text-bg-warning" href="{{ route('chatify') }}">{{ __('Chats') }}</a>
                                    <a class="btn btn-warning dropdown-item text-bg-danger" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesión') }}
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
        <link rel="stylesheet" href="{{ URL('css/app3.css') }}">
        <body>
        <main class="py-4">
            @yield('content')
        </main>
        </body>

    </div>
    </div>
</body>
</html>
