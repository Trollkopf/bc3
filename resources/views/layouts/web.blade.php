<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>bc3 | @yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{-- {{ config('app.name', 'Laravel') }} --}}
                    <img src="{{ asset('img/logo.png') }}" alt="bc3 logo" width="179.55" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                        <div class="dropdown">
                            <a class="nav-link text-uppercase dropdown-toggle" href="#" role="button"
                                id="dropdownAbout" data-bs-toggle="dropdown" aria-expanded="false">
                                quienes somos
                            </a>

                            <ul class="dropdown-menu text-center " aria-labelledby="dropdownAbout">
                                <li><a class="dropdown-item text-uppercase " href="#">Historia</a></li>
                                <li><a class="dropdown-item text-uppercase " href="#">por qu&eacute;</a></li>
                            </ul>
                        </div>
                        <div class="dropdown">
                            <a class="nav-link text-uppercase dropdown-toggle" href="#" role="button"
                                id="dropdownKitchen" data-bs-toggle="dropdown" aria-expanded="false">
                                nuestras cocinas
                            </a>

                            <ul class="dropdown-menu text-center " aria-labelledby="dropdownKitchen">
                                <li><a class="dropdown-item text-uppercase " href="{{ route('classic_kitchen.index') }}">cocinas cl&aacute;sicas</a></li>
                                <li><a class="dropdown-item text-uppercase " href="{{ route('modern_kitchen.index') }}">cocinas modernas</a></li>
                            </ul>
                        </div>
                        <li>
                            <a class="nav-link text-uppercase" href="#">blog</a>
                        </li>
                        <div class="dropdown">
                            <a class="nav-link text-uppercase dropdown-toggle" href="#" role="button"
                                id="dropdownContact" data-bs-toggle="dropdown" aria-expanded="false">
                                contacto
                            </a>

                            <ul class="dropdown-menu text-start " aria-labelledby="dropdownContact">
                                <li><a class="dropdown-item text-uppercase " href="#">clientes - cont&aacute;ctanos</a></li>
                                <li><a class="dropdown-item text-uppercase " href="#">distribuidores - &uacute;nete a bc3</a></li>
                                <li><a class="dropdown-item text-uppercase " href="#">delegaciones - d&oacute;nde encontrarnos</a></li>
                            </ul>
                        </div>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <div class="dropdown">
                            {{-- TODO: --}}
                            <a class="nav-link text-uppercase dropdown-toggle" href="#" role="button"
                                id="dropdownContact" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fs-4 bi-translate"></i>
                            </a>

                            <ul class="dropdown-menu text-start " aria-labelledby="dropdownContact">
                                <li><a class="dropdown-item text-uppercase " href="#">ES</a></li>
                                <li><a class="dropdown-item text-uppercase " href="#">EN</a></li>
                                <li><a class="dropdown-item text-uppercase " href="#">FR</a></li>
                            </ul>
                        </div>

                        <!-- Authentication Links -->
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link text-uppercase " href="{{ route('login') }}">iniciar
                                    sesi&oacute;n</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="col py-3">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
