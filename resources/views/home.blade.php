@extends('layouts.apps')

@section('content')
<div class="container">
    <form method="post">
        <div class="row">
            <div class="col-md-3">
                <div class="profile-img">
                    <img src="{{asset('/storage/images/avatars.png')}}" alt="" class="mx-auto">
                </div>
            </div>
            <div class="col-md-2">
                <div class="profile-head">
                            <h5>{{ Auth::user()->lastname.", ".Auth::user()->firstname }}</h5>
                            <h6 class="text-info fw-bold py-1">{{ Auth::user()->studentId }}</h6>
                            <h6 class="text-primary fw-bold py-2">{{__('Student / User')}}</h6>

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" role="tab" aria-controls="home" aria-selected="true">About</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="card  bg-primary bg-gradient text-white">
                            <div class="card-body">
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
                            <div class="card-body">
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
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-7">
                                        <h2>{{ App\Models\Schedule::all()->count() }}</h2>
                                        <h5>{{ __('Schedule') }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="row py-2">
                    <div class="col-sm-3">
                        <p class="mb-0">Fullname</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0">{{ Auth::user()->firstname."  ".Auth::user()->middlename."  ".Auth::user()->lastname }}</p>
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
                        <p class="mb-0">Student ID</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0">{{ Auth::user()->studentId }}</p>
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
            <div class="col-md-6">
                <div class="row py-2">
                    <div class="col-sm-3">
                        <p class="mb-0">Civil Status</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0">{{ Auth::user()->civil_status }}</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Student Status</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0">{{ Auth::user()->student_status }}</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Department</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0">{{ Auth::user()->department }}</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Semester</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0">{{ Auth::user()->semester }}</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Curriculum Year</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0">{{ Auth::user()->curriculum_year }}</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Student Type</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0">{{ Auth::user()->student_type }}</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Section</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0">{{ Auth::user()->section }}</p>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
