@extends('layouts.apps')

@section('content')
<div class="container">
    <form method="post">
        <div class="row">
            <div class="col-md-2">
                <div class="profile-img">
                    <img src="{{asset('/storage/images/avatars.png')}}" alt="" class="mx-auto" style="width: 150px;height: 150px; ">
                </div>
            </div>
            <div class="col-md-3">
                <div class="profile-head">
                            <h5>{{ Auth::user()->lastname.", ".Auth::user()->firstname }}</h5>
                            <h6 class="text-info fw-bold py-1">{{ Auth::user()->studentId }}</h6>
                            <h6 class="text-primary fw-bold py-2">{{__('Student / User')}}</h6>

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">My Schedule</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-7 py-3">
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="card  bg-primary bg-gradient text-white">
                            <div class="card-body">
                                <div class="row">
                                    <h2>{{ App\Models\User::all()->count() }}</h2>
                                    <h5>{{ __('Student Data') }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card bg-warning bg-gradient text-dark h-100">
                            <div class="card-body">
                                <div class="row">
                                    <h2>{{ App\Models\Teacher::all()->count() }}</h2>
                                    <h5>{{ __('Teacher') }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="card bg-success text-white h-100">
                            <div class="card-body">
                                <div class="row">
                                    <h2>{{ $scheds->count() }}</h2>
                                    <h5>{{ __('My Schedule') }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="tab-content profile-tab" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
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
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="card">
                        <div class="container">
                            <div class="card-body">
                                <div class="table-responsive-sm">
                                    <table class="table data-table table-sm table-bordered table-striped table-hover nowrap">
                                        <thead>
                                            <tr>
                                                <th class="text-center" scope="col">{{ __('Name') }}</th>
                                                <th class="text-center" scope="col">{{ __('Email') }}</th>
                                                <th class="text-center" scope="col">{{ __('Professor') }}</th>
                                                <th class="text-center" scope="col">{{ __(' Professor\'s Email') }}</th>
                                                <th class="text-center" scope="col">{{ __('View My Schedule') }}</th>
                                                <th class="text-center" scope="col">{{ __('Enrolled on') }}</th>
                                            </tr>
                                        </thead>
                                        @foreach ( $scheds as $sched)
                                            <tr>
                                                <td  class="text-center" scope="col">{{ $sched->user->firstname." ".$sched->user->lastname }}</td>
                                                <td  class="text-center" scope="col">{{ $sched->user->email }}</td>
                                                <td class="text-center" scope="col">{{ $sched->teacher->name }}</td>
                                                <td class="text-center" scope="col">{{ $sched->teacher->email }}</td>
                                                <td class="text-center" scope="col">
                                                    <button type="button" class=" btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModalCenter1{{ $sched->id }}"><i class="bi bi-eye"></i></button>
                                                <div class="modal fade " id="exampleModalCenter1{{ $sched->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle1" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            {{-- <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalCenterTitle1">Schedule Form</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div> --}}
                                                            <div class="modal-body">
                                                                <form>
                                                                    <fieldset disabled="disabled">
                                                                    <div class="row text-center">
                                                                        <div class="col-md-12">
                                                                            <img src="{{asset('/storage/images/avatars.png')}}" alt="avatar" class="rounded-circle img-thumbnail" style="width: 100px;">
                                                                            <p class="h4">{{ __('Schedule Form') }}</p>
                                                                        </div>
                                                                    </div>
                                                                        <div class="row">
                                                                            <div class="col-md-2">
                                                                                <label for="name" class="col-form-label">{{ __('Family Name') }}</label>
                                                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $sched->user->lastname }}" >
                                                                                @error('name')
                                                                                    <span class="invalid-feedback" role="alert">
                                                                                        <strong>{{ $message }}</strong>
                                                                                    </span>
                                                                                @enderror
                                                                            </div>

                                                                            <div class="col-md-2">
                                                                                <label for="name" class="col-form-label">{{ __('Given Name') }}</label>
                                                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $sched->user->firstname }}" >
                                                                                @error('name')
                                                                                    <span class="invalid-feedback" role="alert">
                                                                                        <strong>{{ $message }}</strong>
                                                                                    </span>
                                                                                @enderror
                                                                            </div>

                                                                            <div class="col-md-2">
                                                                                <label for="name" class="col-form-label">{{ __('Middle Name') }}</label>
                                                                                <input class="form-control" value="{{ $sched->user->middlename }}" >
                                                                            </div>

                                                                            <div class="col-md-3">
                                                                                <label for="name" class="col-form-label">{{ __('Student ID') }}</label>
                                                                                <input class="form-control" value="{{ $sched->user->studentId }}" >
                                                                            </div>

                                                                            <div class="col-md-3">
                                                                                <label for="name" class="col-form-label">{{ __('Civil Status') }}</label>
                                                                                <input class="form-control" value="{{ $sched->user->civil_status }}" >
                                                                            </div>

                                                                            <div class="col-md-4">
                                                                                <label for="email" class="col-form-label">{{ __('Email Address') }}</label>
                                                                                <div class="input-group">
                                                                                    <div class="input-group-text"><i class="bi bi-envelope-fill"></i></div>
                                                                                    <input id="email" type="email" placeholder="yourname@gmail.com" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $sched->user->email }}">
                                                                                    @error('email')
                                                                                        <span class="invalid-feedback" role="alert">
                                                                                            <strong>{{ $message }}</strong>
                                                                                        </span>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>


                                                                            <div class="col-md-4">
                                                                                <label for="address" class="col-form-label">{{ __('Address') }}</label>
                                                                                <div class="input-group">
                                                                                    <div class="input-group-text"><i class="fa fa-location-arrow"></i></div>
                                                                                <input id="address" type="text" placeholder="R.T. Lim Boulevard, Baliwasan, Zamboanga City" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ $sched->user->address }}">
                                                                                @error('address')
                                                                                    <span class="invalid-feedback" role="alert">
                                                                                        <strong>{{ $message }}</strong>
                                                                                    </span>
                                                                                @enderror
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-4">
                                                                                <label for="phone" class="col-form-label">{{ __('Phone Number') }}</label>
                                                                                <input id="phone" type="text" placeholder="09557815639" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $sched->user->phone }}">
                                                                                @error('phone')
                                                                                    <span class="invalid-feedback" role="alert">
                                                                                        <strong>{{ $message }}</strong>
                                                                                    </span>
                                                                                @enderror
                                                                            </div>


                                                                            <div class="col-md-3">
                                                                                <label for="semester" class="col-form-label">{{ __('Semester') }}</label>
                                                                                <input name="semester" id="semester" class="form-control @error('semester') is-invalid @enderror" name="semester" value="{{ $sched->user->semester }}">
                                                                                    @error('semester')
                                                                                        <span class="invalid-feedback" role="alert">
                                                                                            <strong>{{ $message }}</strong>
                                                                                        </span>
                                                                                    @enderror
                                                                            </div>

                                                                            <div class="col-md-6">
                                                                                <label for="department" class="col-form-label ">{{ __('Department') }}</label>
                                                                                    <input name="department" id="department" class="form-control @error('department') is-invalid @enderror" name="department" value="{{ $sched->user->department }}">
                                                                                    @error('department')
                                                                                        <span class="invalid-feedback" role="alert">
                                                                                            <strong>{{ $message }}</strong>
                                                                                        </span>
                                                                                    @enderror
                                                                            </div>

                                                                            <div class="col-md-3">
                                                                                <label for="birth_date" class="col-form-label">{{ __('Birthday') }}</label>
                                                                                <input id="birth_date" type="date" class="form-control @error('birth_date') is-invalid @enderror" name="birth_date" value="{{ $sched->user->birth_date }}">
                                                                                @error('birth_date')
                                                                                    <span class="invalid-feedback" role="alert">
                                                                                        <strong>{{ $message }}</strong>
                                                                                    </span>
                                                                                @enderror
                                                                            </div>

                                                                            <div class="col-md-2">
                                                                                <label for="age" class="col-form-label">{{ __('Age') }}</label>
                                                                                    <input id="age" type="text" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ $sched->user->age }}">
                                                                                    @error('age')
                                                                                        <span class="invalid-feedback" role="alert">
                                                                                            <strong>{{ $message }}</strong>
                                                                                        </span>
                                                                                    @enderror
                                                                            </div>

                                                                            <div class="col-md-2">
                                                                                <label for="gender" class="col-form-label">{{ __('Gender') }}</label>
                                                                                <input id="gender" type="text" class="form-control @error('gender') is-invalid @enderror" name="gender" value="{{ $sched->user->gender }}" autocomplete="gender" autofocus>
                                                                                @error('gender')
                                                                                    <span class="invalid-feedback" role="alert">
                                                                                        <strong>{{ $message }}</strong>
                                                                                    </span>
                                                                                @enderror
                                                                            </div>

                                                                            <div class="col-md-2">
                                                                                <label for="civil_status" class="col-form-label">{{ __('Civil Status') }}</label>
                                                                                <input name="civil_status" id="civil_status" class="form-control @error('civil_status') is-invalid @enderror" name="civil_status" value="{{ $sched->user->civil_status }}">
                                                                                    @error('civil_status')
                                                                                        <span class="invalid-feedback" role="alert">
                                                                                            <strong>{{ $message }}</strong>
                                                                                        </span>
                                                                                    @enderror
                                                                            </div>

                                                                            <div class="col-md-2">
                                                                                <label for="curriculum_year" class="col-form-label">{{ __('Year Level') }}</label>
                                                                                <input name="curriculum_year" id="curriculum_year" class="form-control @error('curriculum_year') is-invalid @enderror" name="curriculum_year" value="{{ $sched->user->curriculum_year }}">
                                                                                    @error('curriculum_year')
                                                                                        <span class="invalid-feedback" role="alert">
                                                                                            <strong>{{ $message }}</strong>
                                                                                        </span>
                                                                                    @enderror
                                                                            </div>

                                                                            <div class="col-md-4">
                                                                                <label for="student_type" class="col-form-label">{{ __('Student Type') }}</label>
                                                                                <input name="student_type" id="student_type" class="form-control @error('student_type') is-invalid @enderror" name="student_type" value="{{ $sched->user->student_type }}">
                                                                                    @error('student_type')
                                                                                        <span class="invalid-feedback" role="alert">
                                                                                            <strong>{{ $message }}</strong>
                                                                                        </span>
                                                                                    @enderror
                                                                            </div>

                                                                            <div class="col-md-3">
                                                                                <label for="student_status" class="col-form-label">{{ __('Status of Registration') }}</label>
                                                                                <input name="student_status" id="student_type" class="form-control @error('student_status') is-invalid @enderror" name="student_status" value="{{ $sched->user->student_status }}">
                                                                                    @error('student_status')
                                                                                        <span class="invalid-feedback" role="alert">
                                                                                            <strong>{{ $message }}</strong>
                                                                                        </span>
                                                                                    @enderror
                                                                            </div>

                                                                            <div class="card-body">
                                                                                <div class="table-responsive-sm ">
                                                                                    <table class="table data-table table-sm table-bordered table-striped table-hover nowrap">
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th class="header text-center filter-select filter-exact" scope="col">{{ ('Subject') }}</th>
                                                                                                <th class="header text-center" scope="col">{{ ('Unit\'s') }} </th>
                                                                                                <th class="header filter-select filter-exact" scope="col">{{ __('Day') }}</th>
                                                                                                <th class="header filter-select filter-exact text-center" scope="col">{{ __('Time') }}</th>
                                                                                                <th class="header filter-select filter-exact text-center" scope="col">{{ __('Room') }}</th>
                                                                                                <th class="header filter-select filter-exact text-center" scope="col">{{ __('Instructor/Professor') }}</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td class="text-center" scope="row">{{ $sched->subjects }}</td>
                                                                                                <td class="text-center" scope="row">{{ $sched->units }}</td>
                                                                                                <td class="text-center" scope="row">{{ $sched->days }}</td>
                                                                                                <td class="text-center" scope="row">{{ $sched->time }}</td>
                                                                                                <td class="text-center" scope="row">{{ $sched->room }}</td>
                                                                                                <td class="text-center" scope="row">{{ $sched->teacher->name }}</td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </fieldset>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="btn btn-outline-success" href="{{ url('/download/'.$sched->id) }}"><i class="fa fa-download"></i></a>
                                                </td>
                                                <td class="text-center" scope="col">{{ $sched->created_at }}</td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
