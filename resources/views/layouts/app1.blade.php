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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>
<body>
    @include('sweetalert::alert')
    <div id="app">
            @auth
            <div class="container-fluid">
                <div class="row flex-nowrap">
                    <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                        <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                            <a href="{{ url('/') }}" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                                <img class="d-inline-block align-top" src="{{asset('/storage/images/logo.png')}}" height="40" width="40"> <span class="ms-1 d-none d-sm-inline">{{ __(' Student Dashboard') }}</span>
                            </a>
                            <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start text-white" id="menu">
                                <li class="nav-item">
                                    <a href="{{ url('/') }}" class="nav-link align-middle px-0">
                                        <i class="fs-4 bi-house text-white"></i> <span class="ms-1 d-none d-sm-inline text-white">Home</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/dashboard') }}"class="nav-link px-0 align-middle">
                                        <i class="fs-4 bi-speedometer2 text-white"></i> <span class="ms-1 d-none d-sm-inline text-white">Dashboard</span> </a>
                                </li>
                            </ul>
                            <hr>
                            <div class="dropdown pb-4">
                                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ asset('/storage/images/avatar.png') }}" alt="hugenerd" width="30" height="30" class="rounded-circle">
                                    <span class="d-none d-sm-inline mx-1">{{ Auth::user()->name }}</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                                    <li><a class="dropdown-item" href="{{ url('/home') }}">Profile</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li> <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">Sign out</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col py-3">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5>Student Dashboard</h5>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <div class="card  bg-primary bg-gradient text-white">
                                                    <div class="card-body py-5">
                                                        <div class="row">
                                                            <div class="col-sm-7">
                                                                <h2>{{ App\Models\User::all()->count() }}</h2>
                                                                <h5>{{ __('Student Data') }}</h5>
                                                            </div>
                                                            <div class="col-sm-5">
                                                                <lord-icon
                                                                    src="https://cdn.lordicon.com/dxjqoygy.json"
                                                                    trigger="hover"
                                                                    colors="primary:#ffffff,secondary:#ffffff"
                                                                    stroke="60"
                                                                    style="width:100px;height:100px">
                                                                </lord-icon>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- <a href="#" class="card-footer d-flex text-white">
                                                        {{ __('View Details') }}
                                                        <span class="ms-auto text-right">
                                                            <i class="bi bi-chevron-right "></i>
                                                        </span>
                                                    </a> --}}
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card bg-warning bg-gradient text-dark h-100">
                                                    <div class="card-body py-5">
                                                        <div class="row">
                                                            <div class="col-sm-7">
                                                                <h2>{{ App\Models\Teacher::all()->count() }}</h2>
                                                                <h5>{{ __('Teacher') }}</h5>
                                                            </div>
                                                            <div class="col-sm-5">
                                                                <lord-icon
                                                                    src="https://cdn.lordicon.com/zpxybbhl.json"
                                                                    trigger="hover"
                                                                    colors="primary:#121331,secondary:#121331"
                                                                    stroke="60"
                                                                    style="width:100px;height:100px">
                                                                </lord-icon>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- <a href="#" class="card-footer d-flex text-dark">
                                                        {{ __('View Details') }}
                                                        <span class="ms-auto">
                                                            <i class="bi bi-chevron-right"></i>
                                                        </span>
                                                    </a> --}}
                                                </div>
                                            </div>


                                            <div class="col-md-4 mb-3">
                                                <div class="card bg-success text-white h-100">
                                                    <div class="card-body py-5">
                                                        <div class="row">
                                                            <div class="col-sm-7">
                                                                <h2>{{ App\Models\Schedule::all()->count() }}</h2>
                                                                <h5>{{ __('Schedule\'s') }}</h5>
                                                            </div>
                                                            <div class="col-sm-5">
                                                                <lord-icon
                                                                    src="https://cdn.lordicon.com/bbnkwdur.json"
                                                                    trigger="hover"
                                                                    colors="primary:#ffffff,secondary:#ffffff"
                                                                    stroke="60"
                                                                    style="width:100px;height:100px">
                                                                </lord-icon>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- <a href="#" class="card-footer d-flex text-white" >
                                                        {{ __('View Details') }}
                                                        <span class="ms-auto">
                                                            <i class="bi bi-chevron-right"></i>
                                                        </span>
                                                    </a> --}}
                                                </div>
                                            </div>
                                            {{-- <div class="col-md-3 mb-3">
                                                <div class="card shadow-lg bg-danger text-white h-100">
                                                    <div class="card-body py-5">
                                                        <h2>1</h2>
                                                        <h5>{{ __('Admin') }}</h5>
                                                    </div>
                                                    <a href="#" class="card-footer d-flex text-white">
                                                        {{ __('View Details') }}
                                                        <span class="ms-auto">
                                                            <i class="bi bi-chevron-right"></i>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div> --}}
                                </div>
                            </div>
                    </div>
                    @yield('content')
                </div>
            </div>
            @endauth
    </div>
</body>
</html>
