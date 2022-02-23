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
                    <h4 class="card-title">{{ __('Teacher\'s Lists') }}</h4>
                    <thead>
                        <tr>
                            <th class="header text-center filter-select filter-exact" scope="col">{{ ('Teacher\'s ID') }}</th>
                            <th class="header text-center" scope="col"> </th>
                            <th class="header filter-select filter-exact" scope="col">{{ __('Name') }}</th>
                            <th class="header text-start text-dark filter-select filter-exact" scope="col">{{ __('Email') }}</th>
                            <th class="header text-center" scope="col">Actions</th>
                            <th class="header text-center" scope="col">{{ __('Registered') }}</th>
                        </tr>
                    </thead>
                    @foreach($teacher as $teach )
                    <tbody>
                        <tr>
                            <th class="text-center" scope="row">{{ $teach->id }}</th>
                            <td class="text-center" scope="row">
                                @if($teach->image)
                                    <img src="{{ asset('/storage/images/'.$teach->image)}}" class="img-fluid" alt="">
                                @else
                                    <img src="{{ asset('/storage/images/avatar.png')}}" alt="hugenerd" width="30" height="30" class="rounded-circle">
                                @endif
                            </td>
                            <td class="text-start" scope="row">{{ $teach->name }}</th>
                            <td  class="text-start" scope="row">{{ $teach->email }}</td>
                            <td  class="text-center" scope="row">
                                <a href="{{ url('admin/teachers/delete/'.$teach->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')"><i class="bi bi-trash"></i></a>
                                {{-- Modal Teacher Profile --}}
                                <button type="button" class=" btn btn-outline-primary bi bi-eye-fill" data-bs-toggle="modal" data-bs-target="#exampleModalCenter{{ $teach->id }}"></button>
                                <div class="modal fade" id="exampleModalCenter{{ $teach->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                                <h2>{{ __('Teacher\'s Information Form') }}</h2>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <div class="col-md-6">
                                                                <label for="name" class="col-form-label">{{ __('Name') }}</label>
                                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $teach->name }}" >
                                                                @error('name')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label for="email" class="col-form-label">{{ __('Email Address') }}</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-text"><i class="bi bi-envelope-fill"></i></div>
                                                                    <input id="email" type="email" placeholder="yourname@gmail.com" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $teach->email }}">
                                                                    @error('email')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <label for="address" class="col-form-label">{{ __('Address') }}</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-text"><i class="fa fa-location-arrow"></i></div>
                                                                <input id="address" type="text" placeholder="R.T. Lim Boulevard, Baliwasan, Zamboanga City" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ $teach->address }}">
                                                                @error('address')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <label for="phone" class="col-form-label">{{ __('Phone Number') }}</label>
                                                                <input id="phone" type="text" placeholder="09557815639" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $teach->phone }}">
                                                                @error('phone')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>

                                                            <div class="col-md-4">
                                                                <label for="gender" class="col-form-label">{{ __('Gender') }}</label>
                                                                <input id="gender" type="text" class="form-control @error('gender') is-invalid @enderror" name="gender" value="{{ $teach->gender }}" autocomplete="gender" autofocus>
                                                                @error('gender')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="birth_date" class="col-form-label">{{ __('Birthday') }}</label>
                                                                <input id="birth_date" type="date" class="form-control @error('birth_date') is-invalid @enderror" name="birth_date" value="{{ $teach->birth_date }}">
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
                                {{-- Modal Teacher Update Profile --}}
                                <button type="button" class=" btn btn-outline-warning bi bi-pencil-square" data-bs-toggle="modal" data-bs-target="#exampleModalCenters{{ $teach->id }}"></button>
                                <div class="modal fade" id="exampleModalCenters{{ $teach->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitles" aria-hidden="true">
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
                                                        <h2>{{ __('Teacher\'s Update Profile Form') }}</h2>
                                                    </div>
                                                </div>
                                                <form action="{{ url('admin/teachers/update/'.$teach->id) }}" method="POST">
                                                @csrf
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label for="name" class="col-form-label">{{ __('Name') }}</label>
                                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $teach->name }}" >
                                                        @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label for="email" class="col-form-label">{{ __('Email Address') }}</label>
                                                        <div class="input-group">
                                                            <div class="input-group-text"><i class="bi bi-envelope-fill"></i></div>
                                                            <input id="email" type="email" placeholder="yourname@gmail.com" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $teach->email }}">
                                                            @error('email')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <label for="address" class="col-form-label">{{ __('Address') }}</label>
                                                        <div class="input-group">
                                                            <div class="input-group-text"><i class="fa fa-location-arrow"></i></div>
                                                        <input id="address" type="text" placeholder="R.T. Lim Boulevard, Baliwasan, Zamboanga City" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ $teach->address }}">
                                                        @error('address')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label for="phone" class="col-form-label">{{ __('Phone Number') }}</label>
                                                        <input id="phone" type="text" placeholder="09557815639" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $teach->phone }}">
                                                        @error('phone')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label for="gender" class="col-form-label">{{ __('Gender') }}</label>
                                                        <select id="gender" type="text" class="form-control form-select @error('gender') is-invalid @enderror" name="gender" value="{{ $teach->gender }}" autocomplete="gender" autofocus>
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
                                                    <div class="col-md-4">
                                                        <label for="birth_date" class="col-form-label">{{ __('Birthday') }}</label>
                                                        <input id="birth_date" type="date" class="form-control @error('birth_date') is-invalid @enderror" name="birth_date" value="{{ $teach->birth_date }}">
                                                        @error('birth_date')
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
                            <td  class="text-center" scope="row">{{ $teach->created_at->format('m/d/y h:i:s') }}</td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
                {{ $teacher->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
