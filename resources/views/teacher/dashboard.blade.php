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
                            <th class="header filter-select filter-exact text-center" scope="col">{{ __('Name') }}</th>
                            <th class="header text-start text-dark filter-select filter-exact" scope="col">{{ __('Email') }}</th>
                            <th class="header text-center" scope="col">{{ __('Gender') }}</th>
                            {{-- <th class="header text-center" scope="col">{{ __('Actions') }}</th> --}}
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
                            <td class="text-center" scope="row">{{ __(' '.$user->firstname.' '. $user->lastname) }}</th>
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
                                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->firstname." ". $user->lastname }}" >
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
                                {{-- <button type="button" class=" btn btn-outline-warning bi bi-pencil-square" data-bs-toggle="modal" data-bs-target="#exampleModalCenters{{ $user->id }}"></button> --}}
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
                                                <form action="{{ url('/teacher/store/schedule/'.$user->id) }}" method="POST">
                                                    @csrf

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
                                                <form action="{{ url('/teacher/store/schedule/'.$user->id) }}" method="POST">
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
