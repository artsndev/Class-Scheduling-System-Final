@extends('admin.layouts.apps')

@section('content')
<div class="container py-4">
        <div class="row">
            <div class="col-md-2">
                <div class="profile-img">
                    <img src="{{asset('/storage/images/avatars.png')}}" alt="" class="mx-auto" style="width: 150px;height: 150px; ">
                </div>
            </div>
            <div class="col-md-3">
                <div class="profile-head">
                            <h5>{{ $user->lastname.", ".$user->firstname }}</h5>
                            <h6 class="text-info fw-bold py-1">{{ $user->studentId }}</h6>
                            <h6 class="text-primary fw-bold py-2">{{__('Student / User')}}</h6>

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">{{ __('Students Schedule') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="tab-content profile-tab" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="table-responsive-sm ">
                            <table class="table data-table table-sm table-bordered table-striped table-hover nowrap">
                                <thead>
                                    <tr>
                                        <th class="header text-center filter-select filter-exact" scope="col">{{ ('Subject') }}</th>
                                        <th class="header text-center" scope="col">{{ ('Unit\'s') }} </th>
                                        <th class="header filter-select filter-exact" scope="col">{{ __('Day') }}</th>
                                        <th class="header filter-select filter-exact text-center" scope="col">{{ __('Time ') }}</th>
                                        <th class="header filter-select filter-exact text-center" scope="col">{{ __('Room') }}</th>
                                        <th class="header filter-select filter-exact text-center" scope="col">{{ __('Posted by') }}</th>
                                        <th class="header filter-select filter-exact text-center" scope="col">{{ __('Instructor/Professor') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $scheds as $sched)
                                    <tr>
                                        <td class="text-center" scope="row">{{ $sched->subjects }}</td>
                                        <td class="text-center" scope="row">{{ $sched->units }}</td>
                                        <td class="text-center" scope="row">{{ $sched->days }}</td>
                                        @if($sched->timeStart)
                                            <td class="text-center" scope="row">{{ \Carbon\Carbon::parse($sched->timeStart)->format('g:i A')." - ".\Carbon\Carbon::parse($sched->timeEnd)->format('g:i A')  }}</td>
                                        @else
                                            <td class="text-center" scope="row"></td>
                                        @endif
                                        <td class="text-center" scope="row">{{ $sched->room }}</td>
                                        <td class="text-center" scope="row">{{ $sched->admin->name }}</td>
                                        <td class="text-center" scope="row">{{ $sched->proffessor }}</td>
                                        <td>
                                            <button type="button" class=" btn btn-outline-warning bi bi-pencil-square" data-bs-toggle="modal" data-bs-target="#exampleModalCenters{{ $sched->id }}"></button>
                                            <div class="modal fade" id="exampleModalCenters{{ $sched->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitles" aria-hidden="true">
                                                <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalCenterTitles">{{ __('Edit Students Schdule Form') }}</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row text-center">
                                                                <div class="col-md-12">
                                                                    <img src="{{asset('/storage/images/avatars.png')}}" alt="avatar" class="rounded-circle img-thumbnail" style="width: 100px;">
                                                                    <h2>{{ __('Student\'s Update Profile Form') }}</h2>
                                                                </div>
                                                            </div>
                                                            <form action="{{ url('/admin/schedule/update/'.$sched->id) }}" method="POST">
                                                            @csrf
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
                                                                    <tr>
                                                                    <td class="text-center" scope="row">
                                                                        <input name="subjects" type="text" value="{{ $sched->subjects }}" class="form-control @error('subjects') is-invalid @enderror">
                                                                        @error('subjects')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                    </td>
                                                                    <td class="text-center" scope="row">
                                                                        <select name="units" type="text" value="{{ $sched->units }}" class="form-select my-select @error('units') is-invalid @enderror">
                                                                            <option disabled selected>{{ $sched->units  }}</option>
                                                                            <option value="1">{{ __('1') }}</option>
                                                                            <option value="2">{{ __('2') }}</option>
                                                                            <option value="3">{{ __('3') }}</option>
                                                                        </select>
                                                                        @error('units')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                    </td>
                                                                    <td class="text-center" scope="row">
                                                                        <input name="days"type="text" value="{{ $sched->days }}"class="form-control @error('days') is-invalid @enderror">
                                                                        @error('days')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                    </td>
                                                                    <td class="text-center" scope="row">
                                                                        <input name="timeStart" type="time" value="{{ $sched->timeStart }}" class="form-control @error('timeStart') is-invalid @enderror">
                                                                        @error('timeStart')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                    </td>
                                                                    <td class="text-center" scope="row">
                                                                        <input name="timeEnd" type="time"  value="{{ $sched->timeEnd }}" class="form-control @error('timeEnd') is-invalid @enderror">
                                                                        @error('timeEnd')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                    </td>
                                                                    <td class="text-center" scope="row">
                                                                        <input name="room" type="text"  value="{{ $sched->room }}" class="form-control @error('room') is-invalid @enderror">
                                                                        @error('room')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                    </td>
                                                                    <td class="text-center" scope="row">
                                                                        <select name="proffessor" id="" class="form-select my-select @error('proffessor') is-invalid @enderror">
                                                                            <option disabled selected>{{ __('Professor ' ) }}</option>
                                                                            @foreach ($teachers as $teach)
                                                                            <option value="{{ $teach->name }}">{{ $teach->name }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                                                            </form>
                                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
