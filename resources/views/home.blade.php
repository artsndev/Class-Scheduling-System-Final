@extends('layouts.apps')

@section('content')
<div class="col-md-12">
    <div class="card shadow mb-5">
        <div class="card-body">
            <div class="row text-center">
                <div class="col-md-12">
                    <img src="{{asset('/storage/images/avatars.png')}}" alt="avatar" class="rounded-circle img-thumbnail" style="width: 100px;">
                    <h6 class="display-6">{{ __('Student\'s Information Form') }}</h6>
                </div>
            </div>
            <br>
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
                    <p class="mb-0">Username</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0">{{ Auth::user()->username }}</p>
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
</div>
@endsection
