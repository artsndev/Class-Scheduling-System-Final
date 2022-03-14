@extends('teacher.layouts.app1')

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
                            <th class="header text-center filter-select filter-exact" scope="col">{{ ('User\'s ID') }}</th>
                            <th class="header text-center" scope="col"> </th>
                            <th class="header filter-select filter-exact" scope="col">{{ __('Name') }}</th>
                            <th class="header text-start text-dark filter-select filter-exact" scope="col">{{ __('Email') }}</th>
                            <th class="header text-center" scope="col">{{ __('Gender') }}</th>
                            <th class="header text-center" scope="col">{{ __('Actions') }}</th>
                            <th class="header text-center" scope="col">{{ __('Upload') }}</th>
                            <th class="header text-center" scope="col">{{ __('Enrolled') }}</th>
                        </tr>
                    </thead>
                    @foreach ($users as $user)
                    <tbody>
                        <tr>
                            <th class="text-center" scope="row">{{ $user->id }}</th>
                            <td class="text-center" scope="row">
                                @if($user->image)
                                    <img src="{{ asset('/storage/images/'.$user->image)}}" class="img-fluid" alt="">
                                @else
                                    <img src="{{ asset('/storage/images/avatar.png')}}" alt="hugenerd" width="30" height="30" class="rounded-circle">
                                @endif
                            </td>
                            <td class="text-start" scope="row">{{ $user->name }}</th>
                            <td  class="text-start" scope="row">{{ $user->email }}</td>
                            <td  class="text-center" scope="row">{{ $user->gender }}</td>
                            <td  class="text-center" scope="row">
                                {{-- Modal Student Profile --}}
                                <button type="button" class=" btn btn-outline-success bi bi-eye-fill" data-bs-toggle="modal" data-bs-target="#exampleModalCenter{{ $user->id }}"></button>
                                <div class="modal fade" id="exampleModalCenter{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalCenterTitle">Users Description</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="">
                                                    <fieldset disabled="disabled">
                                                        <div class="row text-center">
                                                            <div class="col-md-12">
                                                                <img src="{{asset('/storage/images/avatars.png')}}" alt="avatar" class="rounded-circle img-thumbnail" style="width: 100px;">
                                                                <h2>{{ __('Student\'s Information Form') }}</h2>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <div class="col-md-4">
                                                                <label for="name" class="col-form-label">{{ __('Name') }}</label>
                                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" >
                                                                @error('name')
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
                                                                <label for="username" class="col-form-label">{{ __('Username') }}</label>
                                                                    <input id="username" type="text" placeholder="juandelacruz69" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ $user->username }}">
                                                                    @error('username')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                            </div>

                                                            <div class="col-md-12">
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
                                                                <label for="phone" class="col-form-label">{{ __('Phone Number') }}</label>
                                                                <input id="phone" type="text" placeholder="09557815639" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $user->phone }}">
                                                                @error('phone')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>

                                                            <div class="col-md-4">
                                                                <label for="gender" class="col-form-label">{{ __('Gender') }}</label>
                                                                <input id="gender" type="text" class="form-control @error('gender') is-invalid @enderror" name="gender" value="{{ $user->gender }}" autocomplete="gender" autofocus>
                                                                @error('gender')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="birth_date" class="col-form-label">{{ __('Birthday') }}</label>
                                                                <input id="birth_date" type="date" class="form-control @error('birth_date') is-invalid @enderror" name="birth_date" value="{{ $user->birth_date }}">
                                                                @error('birth_date')
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
                                                <h5 class="modal-title" id="exampleModalCenterTitles">{{ __('Edit Students Schedule') }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row text-center">
                                                    <div class="col-md-12">
                                                        <img src="{{asset('/storage/images/avatars.png')}}" alt="avatar" class="rounded-circle img-thumbnail" style="width: 100px;">
                                                        <h2>{{ __('Student\'s Update Schedule Form') }}</h2>
                                                    </div>
                                                </div>
                                                <form action="{{ url('teacher/dashboard/store/'.$user->id) }}" method="POST">
                                                @csrf
                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <label for="department" class="col-form-label ">{{ __('Department') }}</label>
                                                            <select name="department" id="department" class="form-control form-select my-select @error('department') is-invalid @enderror" name="department" value="{{ old('department') }}">
                                                                <option disabled selected>Choose...</option>
                                                                <option value="CET">College of Engineering & Technology</option>
                                                                <option value="CAHSS">College of Arts, Humanities & Social Sciences</option>
                                                                <option value="CTE">College of Teacher Education</option>
                                                                <option value="CME">College of Maritime Education</option>
                                                                <option value="CTechEd">College of Technical Education</option>
                                                                <option value="CICS">College of Information and Computing Sciences</option>
                                                                <option value="Senior High School">Senior High School</option>
                                                                <option value="Graduate School">Graduate School</option>
                                                            </select>
                                                            @error('department')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label for="semester" class="col-form-label">{{ __('Semester') }}</label>
                                                        <select name="semester" id="semester" class="form-control form-select my-select @error('semester') is-invalid @enderror" name="semester" value="{{ old('semester') }}">
                                                            <option disabled selected>Choose...</option>
                                                            <option value="1st Semester">{{ __('1st Semester') }}</option>
                                                            <option value="2nd Semester">{{ __('2nd Semester') }}</option>
                                                        </select>
                                                            @error('semester')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label for="curriculum_year" class="col-form-label">{{ __('Year Level') }}</label>
                                                        <select name="curriculum_year" id="curriculum_year" class="form-control form-select my-select @error('curriculum_year') is-invalid @enderror" name="curriculum_year" value="{{ old('curriculum_year') }}">
                                                            <option disabled selected>Choose...</option>
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

                                                    <div class="col-md-4">
                                                        <label for="age" class="col-form-label">{{ __('Age') }}</label>
                                                            <input id="age" type="text" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}">
                                                            @error('age')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label for="student_type" class="col-form-label">{{ __('Student Type') }}</label>
                                                        <select name="student_type" id="student_type" class="form-control form-select my-select @error('student_type') is-invalid @enderror" name="student_type" value="{{ old('student_type') }}">
                                                            <option disabled selected>Choose...</option>
                                                            <option value="Regular Student">{{ __('Regular') }}</option>
                                                            <option value="Irregular Student">{{ __('Irregular Student') }}</option>
                                                        </select>
                                                            @error('student_type')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label for="student_status" class="col-form-label">{{ __('Status of Registration') }}</label>
                                                        <select name="student_status" id="student_type" class="form-control form-select my-select @error('student_status') is-invalid @enderror" name="student_status" value="{{ old('student_status') }}">
                                                            <option disabled selected>Choose...</option>
                                                            <option value="New Student">{{ __('New Student') }}</option>
                                                            <option value="Old Student">{{ __('Old Student') }}</option>
                                                            <option value="Shifting Student">{{ __('Shifting Student') }}</option>
                                                            <option value="Transferee">{{ __('Transferee') }}</option>
                                                        </select>
                                                            @error('student_status')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label for="civil_status" class="col-form-label">{{ __('Student Type') }}</label>
                                                        <select name="civil_status" id="civil_status" class="form-control form-select my-select @error('civil_status') is-invalid @enderror" name="civil_status" value="{{ old('civil_status') }}">
                                                            <option disabled selected>Choose...</option>
                                                            <option value="Single">{{ __('Single') }}</option>
                                                            <option value="Married">{{ __('Married') }}</option>
                                                        </select>
                                                            @error('civil_status')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label for="subjects" class="col-form-label">{{ __('Subjects') }}</label>
                                                            <input id="subjects" type="text" class="form-control @error('subjects') is-invalid @enderror" name="subjects" value="{{ old('subjects') }}">
                                                            @error('subjects')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label for="units" class="col-form-label">{{ __('Units') }}</label>
                                                            <input id="units" type="text" class="form-control @error('units') is-invalid @enderror" name="units" value="{{ old('units') }}">
                                                            @error('units')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label for="days" class="col-form-label">{{ __('Days') }}</label>
                                                            <input id="days" type="text" class="form-control @error('days') is-invalid @enderror" name="days" value="{{ old('days') }}">
                                                            @error('days')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label for="time" class="col-form-label">{{ __('Time') }}</label>
                                                            <input id="time" type="text" class="form-control @error('time') is-invalid @enderror" name="time" value="{{ old('time') }}">
                                                            @error('time')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label for="section" class="col-form-label">{{ __('Section') }}</label>
                                                        <select name="section" id="section" class="form-control form-select my-select @error('section') is-invalid @enderror" name="section" value="{{ old('section') }}">
                                                            <option disabled selected>Choose...</option>
                                                            <option value="A">{{ __('A') }}</option>
                                                            <option value="B">{{ __('B') }}</option>
                                                            <option value="C">{{ __('C') }}</option>
                                                            <option value="D">{{ __('D') }}</option>
                                                        </select>
                                                            @error('section')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label for="room" class="col-form-label">{{ __('Room') }}</label>
                                                            <input id="room" type="text" class="form-control @error('room') is-invalid @enderror" name="room" value="{{ old('room') }}">
                                                            @error('room')
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
                                <td  class="text-center" scope="row">
                                {{-- Modal Schedule Form --}}
                                <button type="button" class=" btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModalCenter1{{ $user->id }}"><i class="fa fa-upload"></i></button>
                                <div class="modal fade" id="exampleModalCenter1{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle1" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalCenterTitle1">Schedule Form</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ url('/teacher/schedule/store/'.$user->id) }}" method="POST">
                                                    @csrf
                                                    <div class="row text-center">
                                                        <div class="col-md-12">
                                                            <img src="{{asset('/storage/images/avatars.png')}}" alt="avatar" class="rounded-circle img-thumbnail" style="width: 100px;">
                                                            <p class="h4">{{ __('Schedule Form') }}</p>
                                                        </div>
                                                    </div>
                                                        <div class="row">
                                                            @for ($i = 0; $i < 10; $i++)
                                                            <div class="col-md-4">
                                                                <label for="subjects" class="col-form-label">{{ __('Subjects') }}</label>
                                                                    <input id="subjects" type="text" class="form-control @error('subjects') is-invalid @enderror" name="subjects" value="{{ old('subjects') }}">
                                                                    @error('subjects')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                            </div>
                                                            @endfor

                                                            <div class="col-md-4">
                                                                <label for="units" class="col-form-label">{{ __('Units') }}</label>
                                                                    <input id="units" type="text" class="form-control @error('units') is-invalid @enderror" name="units" value="{{ old('units') }}">
                                                                    @error('units')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                            </div>

                                                            <div class="col-md-4">
                                                                <label for="days" class="col-form-label">{{ __('Days') }}</label>
                                                                    <input id="days" type="text" class="form-control @error('days') is-invalid @enderror" name="days" value="{{ old('days') }}">
                                                                    @error('days')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                            </div>

                                                            <div class="col-md-4">
                                                                <label for="time" class="col-form-label">{{ __('Time') }}</label>
                                                                    <input id="time" type="text" class="form-control @error('time') is-invalid @enderror" name="time" value="{{ old('time') }}">
                                                                    @error('time')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label for="room" class="col-form-label">{{ __('Room') }}</label>
                                                                    <input id="room" type="text" class="form-control @error('room') is-invalid @enderror" name="room" value="{{ old('room') }}">
                                                                    @error('room')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                            </div>
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
                            </td>
                            <td  class="text-center" scope="row">{{ $user->created_at->format('m/d/y h:i:s') }}</td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
