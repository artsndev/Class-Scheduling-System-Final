@extends('teacher.layouts.apps')

@section('content')
<div class="container">
    <nav aria-label="breadcrumb" class="main-breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ __('Home') }}</a></li>
          <li class="breadcrumb-item"><a href="{{ url('/teacher/home') }}">{{ __('teacher') }}</a></li>
          <li class="breadcrumb-item active" aria-current="page">{{ __('home') }}</li>
        </ol>
      </nav>
    <form method="post">
        <div class="row">
            <div class="col-md-3">
                <div class="profile-img">
                    <img src="{{asset('/storage/images/avatars.png')}}" alt="" class="mx-auto">
                </div>
            </div>
            <div class="col-md-6">
                <div class="profile-head">
                            <h5>{{ Auth::user()->name }}</h5>
                            <h6 class="text-primary fw-bold py-3">{{__('Professor / Instructor')}}</h6>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" role="tab" aria-controls="home" aria-selected="true">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Fullname</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0">{{ Auth::user()->name }}</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Email</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0">{{ Auth::user()->email }}</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Birthday</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0">{{ Auth::user()->birth_date }}</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Phone</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0">{{ Auth::user()->phone }}</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Gender</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0">{{ Auth::user()->gender }}</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Address</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0">{{ Auth::user()->address }}</p>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
