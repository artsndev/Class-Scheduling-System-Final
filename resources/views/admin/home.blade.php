@extends('admin.layouts.app1')

@section('content')
<div class="card shadow">
    <div class="container">
        <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">{{ session('status') }}</div>
        @endif
            <div class="table-responsive-sm ">
                <table class="table data-table table-sm table-bordered table-striped table-hover nowrap">
                    <h4 class="card-title">{{ __('Student\'s Lists') }}</h4>
                    <thead>
                        <tr>
                            <th class="header text-center filter-select filter-exact" scope="col">{{ ('Student\'s ID') }}</th>
                            <th class="header text-center" scope="col"> </th>
                            <th class="header filter-select filter-exact" scope="col">{{ __('Name') }}</th>
                            <th class="header text-start text-dark filter-select filter-exact" scope="col">{{ __('Email') }}</th>
                            <th class="header text-center" scope="col">{{ __('Gender') }}</th>
                            <th class="header text-center" scope="col">{{ __('Actions') }}</th>
                            <th class="header text-center" scope="col">{{ __('Schedule\'s') }}</th>
                            <th class="header text-center" scope="col">{{ __('Enrolled') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td  class="text-center" scope="col">{{ $user->id }}</td>
                            <td class="text-center" scope="row">
                                @if($user->image)
                                    <img src="{{ asset('/storage/images/'.$user->image)}}" class="img-fluid" alt="">
                                @else
                                    <img src="{{ asset('/storage/images/avatars.png')}}" alt="hugenerd" width="30" height="30" class="rounded-circle">
                                @endif
                            </td>
                            <td class="text-start" scope="row">{{ $user->firstname." ".$user->lastname }}</th>
                            <td  class="text-start" scope="row">{{ $user->email }}</td>
                            <td  class="text-center" scope="row">{{ $user->gender }}</td>
                            <td  class="text-center" scope="row">
                                <a href="{{ url('admin/delete/'.$user->id) }}" class="btn btn-outline-danger"><i class="bi bi-trash"></i></a>
                                {{-- Modal Student Profile --}}
                                <button type="button" class=" btn btn-outline-success bi bi-eye-fill" data-bs-toggle="modal" data-bs-target="#exampleModalCenter{{ $user->id }}"></button>
                                <div class="modal fade" id="exampleModalCenter{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalCenterTitle">Users Description</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <fieldset disabled="disabled">
                                                    <div class="row text-center">
                                                        <div class="col-md-12">
                                                            <img src="{{asset('/storage/images/avatars.png')}}" alt="avatar" class="rounded-circle img-thumbnail" style="width: 100px;">
                                                            <p class="h4">{{ __('Student\'s Information Form') }}</p>
                                                        </div>
                                                    </div>
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <label for="name" class="col-form-label">{{ __('Family Name') }}</label>
                                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->lastname }}" >
                                                                @error('name')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>

                                                            <div class="col-md-2">
                                                                <label for="name" class="col-form-label">{{ __('Given Name') }}</label>
                                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->firstname }}" >
                                                                @error('name')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>

                                                            <div class="col-md-2">
                                                                <label for="name" class="col-form-label">{{ __('Middle Name') }}</label>
                                                                <input class="form-control" value="{{ $user->middlename }}" >
                                                            </div>

                                                            <div class="col-md-3">
                                                                <label for="name" class="col-form-label">{{ __('Student ID') }}</label>
                                                                <input class="form-control" value="{{ $user->studentId }}" >
                                                            </div>

                                                            <div class="col-md-3">
                                                                <label for="name" class="col-form-label">{{ __('Civil Status') }}</label>
                                                                <input class="form-control" value="{{ $user->civil_status }}" >
                                                            </div>

                                                            <div class="col-md-3">
                                                                <label for="email" class="col-form-label">{{ __('Email Address') }}</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-text"><i class="bi bi-envelope-fill"></i></div>
                                                                    <input id="email" type="email" placeholder="yourname@gmail.com" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}">
                                                                    @error('email')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>


                                                            <div class="col-md-3">
                                                                <label for="address" class="col-form-label">{{ __('Address') }}</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-text"><i class="fa fa-location-arrow"></i></div>
                                                                <input id="address" type="text" placeholder="R.T. Lim Boulevard, Baliwasan, Zamboanga City" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ $user->address }}">
                                                                @error('address')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-md-2">
                                                                <label for="phone" class="col-form-label">{{ __('Phone Number') }}</label>
                                                                <input id="phone" type="text" placeholder="09557815639" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $user->phone }}">
                                                                @error('phone')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>

                                                            <div class="col-md-4">
                                                                <label for="phone" class="col-form-label">{{ __('Department') }}</label>
                                                                <input id="phone" type="text" placeholder="09557815639" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $user->department }}">
                                                                @error('phone')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>

                                                            <div class="col-md-3">
                                                                <label for="semester" class="col-form-label">{{ __('Semester') }}</label>
                                                                <input name="semester" id="semester" class="form-control @error('semester') is-invalid @enderror" name="semester" value="{{ $user->semester }}">
                                                                    @error('semester')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                            </div>

                                                            <div class="col-md-3">
                                                                <label for="department" class="col-form-label ">{{ __('Department') }}</label>
                                                                    <input name="department" id="department" class="form-control @error('department') is-invalid @enderror" name="department" value="{{ $user->department }}">
                                                                    @error('department')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                            </div>

                                                            <div class="col-md-3">
                                                                <label for="birth_date" class="col-form-label">{{ __('Birthday') }}</label>
                                                                <input id="birth_date" type="date" class="form-control @error('birth_date') is-invalid @enderror" name="birth_date" value="{{ $user->birth_date }}">
                                                                @error('birth_date')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>

                                                            <div class="col-md-3">
                                                                <label for="age" class="col-form-label">{{ __('Age') }}</label>
                                                                    <input id="age" type="text" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ $user->age }}">
                                                                    @error('age')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                            </div>

                                                            <div class="col-md-2">
                                                                <label for="gender" class="col-form-label">{{ __('Gender') }}</label>
                                                                <input id="gender" type="text" class="form-control @error('gender') is-invalid @enderror" name="gender" value="{{ $user->gender }}" autocomplete="gender" autofocus>
                                                                @error('gender')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>

                                                            <div class="col-md-2">
                                                                <label for="civil_status" class="col-form-label">{{ __('Civil Status') }}</label>
                                                                <input name="civil_status" id="civil_status" class="form-control @error('civil_status') is-invalid @enderror" name="civil_status" value="{{ $user->civil_status }}">
                                                                    @error('civil_status')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                            </div>

                                                            <div class="col-md-2">
                                                                <label for="curriculum_year" class="col-form-label">{{ __('Year Level') }}</label>
                                                                <input name="curriculum_year" id="curriculum_year" class="form-control @error('curriculum_year') is-invalid @enderror" name="curriculum_year" value="{{ $user->curriculum_year }}">
                                                                    @error('curriculum_year')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                            </div>

                                                            <div class="col-md-3">
                                                                <label for="student_type" class="col-form-label">{{ __('Student Type') }}</label>
                                                                <input name="student_type" id="student_type" class="form-control @error('student_type') is-invalid @enderror" name="student_type" value="{{ $user->student_type }}">
                                                                    @error('student_type')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                            </div>

                                                            <div class="col-md-3">
                                                                <label for="student_status" class="col-form-label">{{ __('Status of Registration') }}</label>
                                                                <input name="student_status" id="student_type" class="form-control @error('student_status') is-invalid @enderror" name="student_status" value="{{ $user->student_status }}">
                                                                    @error('student_status')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Modal Update Student Form --}}
                                <button type="button" class=" btn btn-outline-warning bi bi-pencil-square" data-bs-toggle="modal" data-bs-target="#exampleModalCenters{{ $user->id }}"></button>
                                <div class="modal fade" id="exampleModalCenters{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitles" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalCenterTitles">{{ __('Edit Students Profile') }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row text-center">
                                                    <div class="col-md-12">
                                                        <img src="{{asset('/storage/images/avatars.png')}}" alt="avatar" class="rounded-circle img-thumbnail" style="width: 100px;">
                                                        <h2>{{ __('Student\'s Update Profile Form') }}</h2>
                                                    </div>
                                                </div>
                                                <form action="{{ url('admin/user/update/'.$user->id) }}" method="POST">
                                                @csrf
                                                <div class="row mb-3">
                                                    <div class="col-md-3">
                                                        <label for="lastname" class="col-form-label">{{ __('Last Name') }}</label>
                                                        <input id="lastname" type="text" placeholder="Dela Cruz" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ $user->lastname }}" >
                                                        @error('lastname')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label for="firstname" class="col-form-label">{{ __('First Name') }}</label>
                                                        <input id="firstname" type="text" placeholder="Juan" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ $user->firstname }}" >
                                                        @error('firstname')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label for="middlename" class="col-form-label">{{ __('Middle Initial') }}</label>
                                                        <input id="middlename" type="text" placeholder="Carlos" class="form-control @error('middlename') is-invalid @enderror" name="middlename" value="{{ $user->middlename }}" >
                                                        @error('middlename')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label for="semester" class="col-form-label">{{ __('Semester') }}</label>
                                                        <select name="semester" id="semester" class="form-control form-select my-select @error('semester') is-invalid @enderror" name="semester">
                                                            <option disabled selected>{{ $user->semester }}</option>
                                                            <option value="1st Semester">{{ __('1st Semester') }}</option>
                                                            <option value="2nd Semester">{{ __('2nd Semester') }}</option>
                                                        </select>
                                                            @error('semester')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label for="studentId" class="col-form-label">{{ __('Student ID') }}</label>
                                                        <input id="studentId" type="text" placeholder="ITE-1900137" class="form-control @error('studentId') is-invalid @enderror" name="studentId" value="{{ $user->studentId }}">
                                                        @error('studentId')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label for="age" class="col-form-label">{{ __('Age') }}</label>
                                                            <input id="age" type="text" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ $user->age }}">
                                                            @error('age')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label for="phone" class="col-form-label">{{ __('Phone Number') }}</label>
                                                        <input id="phone" type="text" placeholder="09557815639" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $user->phone }}">
                                                        @error('phone')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label for="birth_date" class="col-form-label">{{ __('Birthday') }}</label>
                                                        <input id="birth_date" type="date" class="form-control @error('birth_date') is-invalid @enderror" name="birth_date" value="{{ $user->birth_date }}">
                                                        @error('birth_date')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label for="email" class="col-form-label">{{ __('Email Address') }}</label>
                                                        <div class="input-group">
                                                            <div class="input-group-text"><i class="bi bi-envelope-fill"></i></div>
                                                            <input id="email" type="email" placeholder="yourname@gmail.com" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}">
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
                                                        <input id="address" type="text" placeholder="R.T. Lim Boulevard, Baliwasan, Zamboanga City" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ $user->address }}">
                                                        @error('address')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label for="curriculum_year" class="col-form-label">{{ __('Year Level') }}</label>
                                                        <select name="curriculum_year" id="curriculum_year" class="form-control form-select my-select @error('curriculum_year') is-invalid @enderror" name="curriculum_year" value="{{ old('curriculum_year') }}">
                                                            <option disabled selected>{{ $user->curriculum_year }}</option>
                                                            <option value="1st year">{{ __('1st year') }}</option>
                                                            <option value="2nd year">{{ __('2nd year') }}</option>
                                                            <option value="3rd year">{{ __('3rd year') }}</option>
                                                            <option value="4th year">{{ __('4th year') }}</option>
                                                        </select>
                                                            @error('curriculum_year')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                    </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                                                </form>
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td  class="text-center" scope="row">
                                {{-- Modal Schedule Form --}}
                                <button type="button" class=" btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModalCenter1{{ $user->id }}"><i class="fa fa-upload"></i></button>
                                <div class="modal fade" id="exampleModalCenter1{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle1" aria-hidden="true">
                                    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalCenterTitle1">Schedule Form</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ url('/admin/store/schedule/'.$user->id) }}" method="POST">
                                                    @csrf
                                                    <div class="row text-center">
                                                        <div class="col-md-12">
                                                            <img src="{{asset('/storage/images/avatars.png')}}" alt="avatar" class="rounded-circle img-thumbnail" style="width: 100px;">
                                                            <p class="h4">{{ __('Schedule Form') }}</p>
                                                        </div>
                                                    </div>

                                                    <div class="table-responsive-sm ">
                                                        <table>
                                                            <thead>
                                                                <tr>
                                                                    <th class="header text-start filter-select filter-exact" scope="col">{{ ('Subjects') }}</th>
                                                                    <th class="header text-start" scope="col">{{ __('Units') }}</th>
                                                                    <th class="header filter-select filter-exact" scope="col">{{ __('Days') }}</th>
                                                                    <th class="header text-start text-dark filter-select filter-exact" scope="col">{{ __('Time Start') }}</th>
                                                                    <th class="header text-start text-dark filter-select filter-exact" scope="col">{{ __('Time End') }}</th>
                                                                    <th class="header text-center" scope="col">{{ __('Room') }}</th>
                                                                    <th class="header text-center" scope="col">{{ __('Instructor') }}</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @for ($x=1; $x<11; $x++)
                                                                <tr>
                                                                <td class="text-center" scope="row">
                                                                    <input name="sched[{{ $x }}][subjects]" type="text" placeholder="Subjects {{ $x }}" class="form-control @error('sched.'.$x.'.subjects') is-invalid @enderror">
                                                                    @error('sched.'.$x.'.subjects')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </td>
                                                                <td class="text-center" scope="row">
                                                                    <select name="sched[{{ $x }}][units]" type="text" placeholder="Unit {{ $x }}" class="form-select my-select @error('sched.'.$x.'.units') is-invalid @enderror">
                                                                        <option disabled selected>{{ __('Choose...') }}</option>
                                                                        <option value="1">{{ __('1') }}</option>
                                                                        <option value="2">{{ __('2') }}</option>
                                                                        <option value="3">{{ __('3') }}</option>
                                                                    </select>
                                                                    @error('sched.'.$x.'.units')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </td>
                                                                <td class="text-center" scope="row">
                                                                    <input name="sched[{{ $x }}][days]"type="text" placeholder="Day {{ $x }}" class="form-control @error('sched.'.$x.'.days') is-invalid @enderror">
                                                                    @error('sched.'.$x.'.days')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </td>
                                                                <td class="text-center" scope="row">
                                                                    <input name="sched[{{ $x }}][timeStart]" type="time" class="form-control @error('sched.'.$x.'.timeStart') is-invalid @enderror">
                                                                    @error('sched.'.$x.'.timeStart')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </td>
                                                                <td class="text-center" scope="row">
                                                                    <input name="sched[{{ $x }}][timeEnd]" type="time" class="form-control @error('sched.'.$x.'.timeEnd') is-invalid @enderror">
                                                                    @error('sched.'.$x.'.timeEnd')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </td>
                                                                <td class="text-center" scope="row">
                                                                    <input name="sched[{{ $x }}][room]" type="text" placeholder="Room {{ $x }}" class="form-control @error('sched.'.$x.'.room') is-invalid @enderror">
                                                                    @error('sched.'.$x.'.room')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </td>
                                                                <td class="text-center" scope="row">
                                                                    <select name="sched[{{ $x }}][proffessor]" id="" class="form-select my-select @error('sched.'.$x.'.proffessor') is-invalid @enderror">
                                                                        <option disabled selected>{{ __('Professor '. $x ) }}</option>
                                                                        @foreach ($teachers as $teach)
                                                                        <option value="{{ $teach->name }}">{{ $teach->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    </td>
                                                                </tr>
                                                                @endfor
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Upload</button>
                                            </form>
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td  class="text-center" scope="row">{{ $user->created_at->format('m/d/y h:i:s') }}</td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
                {{ $users->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
