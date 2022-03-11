@extends('admin.layouts.apps')

@section('content')
<div class="col py-3">
    <div class="card shadow">
        <div class="row py-3 text-center">
            <div class="col-md-12">
                <img src="{{asset('/storage/images/avatars.png')}}" alt="avatar" class="rounded-circle img-thumbnail" style="width: 100px;">

                <h5>{{ __('Student Registration Form') }}</h5>
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="row mb-3">

                    <div class="col-md-3">
                        <label for="lastname" class="col-form-label">{{ __('Last Name') }}</label>
                        <input id="lastname" type="text" placeholder="Dela Cruz" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" >
                        @error('lastname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-3">
                        <label for="firstname" class="col-form-label">{{ __('First Name') }}</label>
                        <input id="firstname" type="text" placeholder="Juan" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" >
                        @error('firstname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-3">
                        <label for="middlename" class="col-form-label">{{ __('Middle Initial') }}</label>
                        <input id="middlename" type="text" placeholder="Carlos" class="form-control @error('middlename') is-invalid @enderror" name="middlename" value="{{ old('middlename') }}" >
                        @error('middlename')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-3">
                        <label for="studentId" class="col-form-label">{{ __('Student ID') }}</label>
                        <input id="studentId" type="text" placeholder="ITE-1900137" class="form-control @error('studentId') is-invalid @enderror" name="studentId" value="{{ old('studentId') }}">
                        @error('studentId')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-3">
                        <label for="civil_status" class="col-form-label">{{ __('Civil Status') }}</label>
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

                    <div class="col-md-6">
                        <label for="address" class="col-form-label">{{ __('Address') }}</label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="fa fa-location-arrow"></i></div>
                        <input id="address" type="text" placeholder="R.T. Lim Boulevard, Baliwasan, Zamboanga City" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}">
                        @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div>

                    <div class="col-md-3">
                        <label for="department" class="col-form-label ">{{ __('Department') }}</label>
                            <select name="department" id="department" class="form-control form-select my-select @error('department') is-invalid @enderror" name="department" value="{{ old('department') }}">
                                <option disabled selected>Choose...</option>
                                <option value="{{ __('College of Engineering & Technology') }}">College of Engineering & Technology</option>
                                <option value="{{ __('College of Arts, Humanities & Social Sciences') }}">College of Arts, Humanities & Social Sciences</option>
                                <option value="{{ __('College of Teacher Education') }}">College of Teacher Education</option>
                                <option value="{{ __('College of Maritime Education') }}">College of Maritime Education</option>
                                <option value="{{ __('College of Technical Education') }}">College of Technical Education</option>
                                <option value="{{ __('College of Information and Computing Sciences') }}">College of Information and Computing Sciences</option>
                            </select>
                            @error('department')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>


                    <div class="col-md-3">
                        <label for="email" class="col-form-label">{{ __('Email Address') }}</label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-envelope-fill"></i></div>
                            <input id="email" type="email" placeholder="yourname@gmail.com" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-2">
                        <label for="phone" class="col-form-label">{{ __('Phone Number') }}</label>
                        <input id="phone" type="text" placeholder="09557815639" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}">
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-2">
                        <label for="gender" class="col-form-label">{{ __('Gender') }}</label>
                        <select id="gender" type="text" class="form-control form-select @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}" autocomplete="gender" autofocus>
                            <option selected class="text-muted">{{ ('Choose your gender...') }}</option>
                            <option value="Male">{{ __('Male') }}</option>
                            <option value="Female">{{ __('Female') }}</option>
                        </select>
                        @error('gender')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-2">
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

                    <div class="col-md-3">
                        <label for="birth_date" class="col-form-label">{{ __('Birthday') }}</label>
                        <input id="birth_date" type="date" class="form-control @error('birth_date') is-invalid @enderror" name="birth_date" value="{{ old('birth_date') }}">
                        @error('birth_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="col-md-2">
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

                    <div class="col-md-2">
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

                    <div class="col-md-2">
                        <label for="age" class="col-form-label">{{ __('Age') }}</label>
                            <input id="age" type="text" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}">
                            @error('age')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                    <div class="col-md-3">
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

                    <div class="col-md-3">
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

                    <div class="col-md-6">
                        <label for="password" class="col-form-label">{{ __('Password') }}</label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="fa fa-lock"></i></div>
                        <input id="password" type="password" placeholder="Must be 8-20 characters long." class="form-control @error('password') is-invalid @enderror" name="password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="password-confirm" class="col-form-label">{{ __('Confirm Password') }}</label>
                        <div class="input-group">
                                    <div class="input-group-text"><i class="fa fa-lock"></i></div>
                        <input id="password-confirm" placeholder="Must same with your password." type="password" class="form-control" name="password_confirmation">
                        </div>
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
