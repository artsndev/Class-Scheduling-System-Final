<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
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
                            <a class="nav-link text-white" href="#home">{{ __(' Home') }}</a>
                        </li>
                        <li class="nav-item mx-3 mx-auto">
                            <a class="nav-link text-white" href="#about">{{ __('About') }}</a>
                        </li>
                        <li class="nav-item mx-4 mx-auto">
                            <a class="nav-link text-white" href="#team">{{ __('Team') }}</a>
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
                                     {{-- {{ Auth::user()->name }} --}}
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

        <main>
            <!-- Banner Section -->
            <section id="home" class="d-flex align-items-center position-relative vh-100 cover hero" style="background-image:url({{asset('/storage/images/zppsu.jpg')}}); background-repeat: no-repeat; background-size: cover;">
                <div class="container-fluid container-fluid-max">
                  <div class="row">
                    <div class="col-12 text-center">
                      <h1 class="text-white text-grey-100 text-uppercase display-4">{{ __('Welcome to Class Scheduling System') }}</h1>
                      <div class="mt-3">
                        <a class="btn btn-primary text-white mr-2" href="#about" role="button">{{ __('Get Started') }}</a>
                        <a class="btn bg-red text-white" href="" role="button">...</a>
                      </div>
                    </div>
                  </div>
                </div>
              </section

              <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. </p>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
              <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <section class="features-icons bg-light text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 fs-5">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon d-flex"><i class="bi-window m-auto text-primary"></i></div>
                        <h3>Fully Responsive</h3>
                        <p class="lead mb-0">This theme will look great on any device, no matter the size!</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon d-flex"><i class="bi-layers m-auto text-primary"></i></div>
                        <h3>Bootstrap 5 Ready</h3>
                        <p class="lead mb-0">Featuring the latest build of the new Bootstrap 5 framework!</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                        <div class="features-icons-icon d-flex"><i class="bi-terminal m-auto text-primary"></i></div>
                        <h3>Easy to Use</h3>
                        <p class="lead mb-0">Ready to use with your own content, or customize the source files!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
            <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h1 class="display-5 text-center">Team</h1>
            <p class="h2 text-center">{{ __('We are the Invincibles Team of CTechEd') }}</p>
          </div>

          <div class="row">

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
              <div class="card">
                <div class="card-body">
                  <img src="{{ asset('storage/images/pic1.jpg') }}" class="img-fluid" alt="">
                  <div class="social">
                    <a href=""><i class="fa-2x bi bi-twitter"></i></a>
                    <a href="https://www.facebook.com/profile.php?id=100007949627143"><i class="fa-2x bi bi-facebook"></i></a>
                    <a href=""><i class=" fa-2x bi bi-instagram"></i></a>
                    <a href=""><i class="fa-2x bi bi-linkedin"></i></a>
                  </div>
                <div class="member-info">
                  <h4>{{ __('Al-jhaihar Hadjula') }}</h4>
                </div>
            </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
              <div class="card">
                <div class="card-body">
                  <img src="{{ asset('storage/images/pic2.jpg') }}" class="img-fluid" alt="">
                  <div class="social">
                    <a href=""><i class="fa-2x bi bi-twitter"></i></a>
                    <a href=""><i class="fa-2x bi bi-facebook"></i></a>
                    <a href=""><i class=" fa-2x bi bi-instagram"></i></a>
                    <a href=""><i class="fa-2x bi bi-linkedin"></i></a>
                  </div>

                <div class="member-info">
                  <h4>{{ __('Will May Sugano') }}</h4>
                  <span>Product Manager</span>
                </div>
             </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
              <div class="card">
                <div class="card-body">
                  <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                  <div class="social">
                    <a href=""><i class="fa-2x bi bi-twitter"></i></a>
                    <a href=""><i class="fa-2x bi bi-facebook"></i></a>
                    <a href=""><i class=" fa-2x bi bi-instagram"></i></a>
                    <a href=""><i class="fa-2x bi bi-linkedin"></i></a>
                  </div>

                <div class="member-info">
                  <h4>{{ __('Radzmil Jawharan') }}</h4>
                </div>
            </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
              <div class="member">
                <div class="member-img">
                  <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                  <div class="social">
                    <a href=""><i class="fa-2x bi bi-twitter"></i></a>
                    <a href=""><i class="fa-2x bi bi-facebook"></i></a>
                    <a href=""><i class=" fa-2x bi bi-instagram"></i></a>
                    <a href=""><i class="fa-2x bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>{{ __('Bilita Abdulkalim') }}</h4>
                </div>
              </div>
            </div>

          </div>

        </div>
      </section><!-- End Team Section -->
            <!-- Request a Quote Section -->
            <section>...</section>
          </main>
        {{-- <section class="contact-section bg-black" id="contact">
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
            </div>
        </section> --}}
        <footer class="footer bg-black text-center text-white-50">
        <div class="footer-copyright text-center text-white-50 py-2 container-fluid">© 2021 Made with a
            <lord-icon
                src="https://cdn.lordicon.com/rjzlnunf.json"
                trigger="loop"
                colors="primary:#ffffff,secondary:#ffffff"
                stroke="90"
                style="width:25px;height:25px">
            </lord-icon>by
            <a href="{{ url('/') }}">{{ __('Invincible\'s') }} </a>. All rights reserved.
        </div>
        </footer>
    </div>
<script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
</body>
</html>
