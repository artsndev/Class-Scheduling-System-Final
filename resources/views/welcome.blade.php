<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ZPPSU Guidance Complaint Management system</title>
    <link rel = "icon" href ="{{ asset('storage/images/logo.png') }}" type = "image/x-icon">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>

<body>
    @include('sweetalert::alert')
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm ">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="d-inline-block align-top" src="{{asset('/storage/images/logo.png')}}" height="40" width="40">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item mx-3">
                            <a class="nav-link text-white" href="{{ url('/') }}">{{ __(' Home') }}</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link text-white" href="{{ route('admin.home') }}">{{ __(' Admin') }}</a>
                        </li>
                        <li class="nav-item mx-auto">
                            <a class="nav-link text-white" href="{{ route('teacher.home') }}">{{ __('Teacher') }}</a>
                        </li>
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Student') }}</a>
                                </li>
                            @endif
                        @else
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('home') }}">{{ Auth::user()->name }}</a>
                            </li>
                        @endauth
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ url('home') }}" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{--  {{ Auth::user()->name }}  --}}
                                    @if(Auth::user()->image)
                                        <img class="rounded-circle" src="{{asset('/storage/images/'.Auth::user()->image)}}" alt="image" style="width: 30px;height: 30px; ">
                                    @endif
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick ="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt" style="font-size: 1rem; "></i>
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

        <section class="py-4" style="height:540px">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="text-center">
                            <img class="image rounded-circle" src="{{asset('/storage/images/logo.png')}}" alt="image" style="width: 150px;height: 150px; ">
                            <h1>{{ __('Welcome to ZPPSU Class Scheduling System') }}</h2>
                            <h5 class="text-primary">This system is 100% work <strong>from scratch</strong> using <strong>PHP Laravel</strong> v.8 and <strong>Bootstrap </strong>5.1.3 </h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
</body>
</html>
