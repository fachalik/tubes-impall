<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{--    sweetalert2--}}
    <script src="sweetalert2.all.min.js"></script>
    <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color: #88ff85;">
            <div class="container">
                <a class="navbar-brand text-light" href="{{ url('/') }}">
                    SISC
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ml-5">
                        <li class="nav-item px-4"><a href="katalog">Handphone</a></li>
                        <li class="nav-item px-4"><a href="katalog">Sparepart</a></li>
                    </ul>
                    <div class="collapse navbar-collapse justify-content-center">
                        <input class="form-control col-8" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-secondary col-1.5" type="submit">cari</button>
                    </div>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Auth::user() != null)    
                            <li class="nav-item px-2">
                                <a class="nav-link" href="/keranjang"><img src="{{url('assets/icon-keranjang.png')}}" alt=""  style="width: 20px; height: 20px;"></a>
                            </li>
                            @endif
                            <li class="nav-item dropdown px-2">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <img src="{{url('assets/icon-profile.png')}}" alt=""  style="width: 20px; height: 20px;">
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item mx-auto" href="/login"><p>login</p></a>
                                </div>
                            </li>
                        @else
                            <li class="nav-item px-2">
                                <a class="nav-link" href="/keranjang"><img src="{{url('assets/icon-keranjang.png')}}" alt=""  style="width: 20px; height: 20px;"></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <img src="{{url('assets/icon-profile.png')}}" alt=""  style="width: 20px; height: 20px;"> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a href="/home" class="dropdown-item">Profile</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
        <footer class="page-footer font-small blue border-top">
            <div class="footer-copyright py-3 text-left ml-5">© 2019 Copyright:
            <a href="#"> SISC Sinar Indah Cell</a>
            </div>
        </footer>
    </div>
</body>
</html>
