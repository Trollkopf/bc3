<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>bc3 | Backoffice - @yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    {{-- LEFT NAV --}}
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-light">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('img/logo.png') }}" alt="bc3 logo" width="179.55"  />
                    </a>
                    <hr>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                        id="menu">
                        <li class="nav-item">
                            <a href="{{ url('/home') }}" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Inicio</span>
                            </a>
                        </li>

                        <li>
                            <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-body-text"></i> <span class="ms-1 d-none d-sm-inline">
                                    Contenido</span> </a>
                            <ul class="collapse show nav flex-column ms-3" id="submenu1" data-bs-parent="#menu">

                                <li class="w-100">
                                    <a href="#" class="nav-link px-0"><i class="fs-4 bi-translate"></i><span
                                            class="d-none d-sm-inline text-capitalize "> Traducciones</span></a>
                                </li>
                                <li class="w-100">
                                    <a href="{{ route('pages.index') }}" class="nav-link px-0"> <i class="fs-4 bi-book"></i><span
                                            class="d-none d-sm-inline text-capitalize "> P&aacute;ginas</span></a>
                                </li>
                                <li class="w-100">
                                    <a href="{{ route('blog.index') }}" class="nav-link px-0"> <i class="fs-4 bi-substack"></i><span
                                            class="d-none d-sm-inline text-capitalize "> Blog</span></a>
                                </li>
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0"><i class="fs-4 bi-envelope-at"></i> <span
                                            class="d-none d-sm-inline text-capitalize "> Emails</span></a>
                                </li>
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0"> <i class="fs-4 bi-gear"></i><span
                                            class="d-none d-sm-inline text-capitalize "> Configuraci&oacute;n</span></a>
                                </li>
                                <hr>
                            </ul>
                        </li>

                        <li>
                            <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                <i class="fs-4 bi-person-circle"></i> <span
                                    class="ms-1 d-none d-sm-inline">Admin</span></a>
                            <ul class="collapse nav flex-column ms-3" id="submenu2" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="{{ route('register') }}" class="nav-link px-0"><i
                                            class="fs-4 bi-people"></i> <span class="d-none d-sm-inline">
                                            Admins</span></a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"><i class="fs-4 bi-file-earmark"></i> <span
                                            class="d-none d-sm-inline"> Logs</span></a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"><i class="fs-4 bi-gear"></i> <span
                                            class="d-none d-sm-inline">Configs</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <hr>
                    <div class="dropdown pb-4">
                        <a href="#"
                            class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                            id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://avatars.githubusercontent.com/u/101181314?v=4" alt="hugenerd"
                                width="30" height="30" class="rounded-circle">
                            <span class="d-none d-sm-inline mx-3 text-dark ">{{ Auth::user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                            <li><a class="dropdown-item text-capitalize " href="#">Nuevo proyecto</a></li>
                            <li><a class="dropdown-item text-capitalize " href="#">Editar perfil</a></li>
                            <li><a class="dropdown-item text-capitalize " href="#">Perfil</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li> <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                    Salir
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col py-3">
                <main class="py-4">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
</body>

</html>
