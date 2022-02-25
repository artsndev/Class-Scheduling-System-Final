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

                        <li class="nav-item mx-3 mx-auto">
                            <a class="nav-link text-white" href="{{ url('/') }}">{{ __(' Home') }}</a>
                        </li>
                        <li class="nav-item mx-4 mx-auto">
                            <a class="nav-link text-white" href="#contact">{{ __('Contact') }}</a>
                        </li>
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item mx-3 mx-auto">
                            <a class="nav-link text-white" href="{{ route('admin.home') }}">{{ __(' Admin') }}</a>
                        </li>
                        <li class="nav-item mx-3 mx-auto">
                            <a class="nav-link text-white" href="{{ route('teacher.home') }}">{{ __('Teacher') }}</a>
                        </li>
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item mx-3 mx-auto">
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

        <header class="masthead py-4">
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center py-5">
                    <div class="text-center">
                        <h1 class="mx-auto my-0 text-uppercase">{{ __('Welcome') }}</h1>
                        <h2 class="text-black-100 mx-auto mt-2 mb-5">{{ __('A free, secured, Class Scheduling theme created by Start Bootstrap.') }}</h2>
                        <a class="btn btn-primary" href="#about">Get Started</a>
                    </div>
                </div>
            </div>
        </header>

        <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

          <div class="section-title text-center">
            <h2>About Us</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. </p>
          </div>

          <div class="row content">
            <div class="col-lg-6">
              <p class="fs-4">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class="bi bi-check-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
                <li><i class="bi bi-check-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
                <li><i class="bi bi-check-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
              </ul>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0">
              <p class="fs-4">
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum.
              </p>
              <a href="#" class="btn-learn-more">Learn More</a>
            </div>
          </div>

          {{-- <section>
            <div class="col py-3">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="card  bg-primary bg-gradient text-white">
                                        <div class="card-body py-5">
                                            <div class="row">
                                                <div class="col-sm-7">
                                                    <h2>{{ App\Models\User::all()->count() }}</h2>
                                                    <h5>{{ __('Student Data') }}</h5>
                                                </div>
                                            </div>
                                        </div>
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
                                            </div>
                                        </div>
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
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
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
                                </div>
                    </div>
                        </div>
                        </div>
                </div>
            </div>
          </section> --}}

        </div>
      </section><!-- End About Section -->

        {{-- <section class="py-4" style="height:540px">
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
        </section> --}}

        <section class="contact-section bg-black" id="contact">
            <div class="container px-4 py-3 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center ">
                                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">{{ __('Address') }}</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-100">{{ __('R.T. Lim Boulevard, Baliwasan, Zamboanga City') }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">{{ __('Email') }}</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50"><a href="#!">{{ __('bimbimxerep@gmail.com') }}</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">{{ __('Phone') }}</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">{{ __('0955-567-8017') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="social d-flex justify-content-center">
                    <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-github"></i></a>
                </div> --}}
            </div>
        </section>
        <footer class="footer bg-black text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; Your Website 2021</div></footer>
    </div>
<script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
</body>
</html>
