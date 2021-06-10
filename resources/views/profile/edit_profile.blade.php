@extends('layouts.dasbord')

@section('content')

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Edit Profile
                        <small>Multikart Admin panel</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item active">Edit Profile</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

<!-- Container-fluid starts-->
<div class="container-fluid">
    @if(session('success'))
    <div class="alert alert-success">
        {{ (session('success')) }}
    </div>
    @endif

    <div class="row">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <div class="profile-details text-center">
                        <img src="{{ asset('asset/upload/user') }}/{{ Auth::user()->profile_image }}" alt=""
                            class="img-fluid img-90 rounded-circle blur-up lazyloaded">
                        <h5 class="f-w-600 mb-0">{{ Auth::user()->name }}</h5>
                        <span>{{ Auth::user()->email }}</span>
                        <div class="social">
                            <div class="form-group btn-showcase">
                                @if (Auth::user()->facebook != null)
                                <button class="btn social-btn btn-fb d-inline-block"> <i
                                        class="fa fa-facebook"></i></button>
                                @endif
                                @if (Auth::user()->linkedin != null)
                                <button class="btn social-btn btn-google d-inline-block"><i
                                        class="fa fa-google"></i></button>
                                @endif
                                @if (Auth::user()->twitter != null)
                                <button class="btn social-btn btn-twitter d-inline-block me-0"><i
                                        class="fa fa-twitter"></i></button>
                                @endif
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="project-status">
                        <h5 class="f-w-600">Profile Information</h5>
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td>Name:</td>
                                    <td>{{ Auth::user()->name }}</td>
                                </tr>
                                <tr>
                                    <td>Email:</td>
                                    <td>{{ Auth::user()->email }}</td>
                                </tr>
                                @if (Auth::user()->gender != 0)
                                <tr>
                                    <td>Gender:</td>
                                    <td>
                                        @if (Auth::user()->gender == 1)
                                        Male
                                        @elseif(Auth::user()->gender == 2)
                                        Female
                                        @else
                                        Other
                                        @endif
                                    </td>
                                </tr>
                                @endif
                                @if (Auth::user()->mobile != null)
                                <tr>
                                    <td>Mobile Number:</td>
                                    <td>{{ Auth::user()->mobile }}</td>
                                </tr>
                                @endif
                                @if (Auth::user()->dob != null)
                                <tr>
                                    <td>DOB:</td>
                                    <td>{{ Auth::user()->dob }}</td>
                                </tr>
                                @endif
                                @if (Auth::user()->location != 0)
                                <tr>
                                    <td>Location:</td>
                                    <td>{{ Auth::user()->location }}</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card tab2-card">
                <div class="card-body">

                    <div class="tab-content" id="top-tabContent">

                        <div class="tab-pane fade show active">
                            <div class="account-setting">
                                <h5 class="f-w-600">Profile Image Change</h5>
                                <div class="row">
                                    <div class="col">
                                        <img class="img-100 rounded-circle lazyloaded edit_profile_image"
                                            src="{{ asset('asset/upload/user') }}/{{ Auth::user()->profile_image }}"
                                            alt="#">
                                        <form action="{{ route('profile_image_update') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label>Text</label>
                                                <input class="form-control-file" type="file" name="profile_image">
                                                @error('profile_image')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <button type="sumit" class="btn btn-primary mt-2">Update</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="account-setting deactivate-account">
                                <h5 class="f-w-600">Gender</h5>
                                <div class="row">
                                    <div class="col">
                                        <form action="{{ route('profile_gender_update') }}" method="POST">
                                            @csrf
                                            <label class="d-block" for="edo-ani">
                                                <input value="1" class="radio_animated" id="edo-ani" type="radio"
                                                    name="gender" {{ (Auth::user()->gender=="1")? "checked" : "" }}>
                                                Male
                                            </label>
                                            <label class="d-block" for="edo-ani1">
                                                <input value="2" class="radio_animated" id="edo-ani1" type="radio"
                                                    name="gender" {{ (Auth::user()->gender=="2")? "checked" : "" }}>
                                                Female
                                            </label>
                                            <label class="d-block" for="edo-ani2">
                                                <input value="3" class="radio_animated" id="edo-ani2" type="radio"
                                                    name="gender" {{ (Auth::user()->gender=="3")? "checked" : "" }}>
                                                Other
                                            </label>
                                            <label class="d-block mb-0" for="edo-ani3">
                                                <input value="0" class="radio_animated" id="edo-ani3" type="radio"
                                                    name="gender" {{ (Auth::user()->gender=="0")? "checked" : "" }}>
                                                Don't Show
                                            </label>
                                            <button type="submit" class="btn btn-primary">Add Gander</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="account-setting deactivate-account">
                                <h5 class="f-w-600">Name Change</h5>
                                <div class="row">
                                    <div class="col">
                                        <form action="{{ route('profile_name_update') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <p>Your Old Name : {{ Auth::user()->name }}</p>
                                                <label>New Name</label>
                                                <input class="form-control @error('name') is-invalid @enderror"
                                                    value="{{ old('name') }}" type="text" name="name"
                                                    placeholder="Add New Name">
                                                @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <button type="sumit" class="btn btn-primary mt-2">Update</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card tab2-card">
                <div class="card-body">

                    <div class="tab-content" id="top-tabContent">

                        <div class="tab-pane fade show active">

                            <div class="account-setting ">
                                <h5 class="f-w-600">Email Change</h5>
                                <div class="row">
                                    <div class="col">
                                        <form action="{{ route('profile_email_update') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <p>Your Old Email : {{ Auth::user()->email }}</p>
                                                <label>New Email</label>
                                                <input class="form-control @error('email') is-invalid @enderror"
                                                    value="{{ old('email') }}" type="email" name="email"
                                                    placeholder="Add New Email">
                                                @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <button type="sumit" class="btn btn-primary mt-2">Update</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="account-setting deactivate-account">
                                <h5 class="f-w-600">Password Change</h5>
                                <div class="row">
                                    <div class="col">
                                        <form action="{{ route('profile_password_update') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label>Old Password</label>
                                                <input class="form-control @error('old_password') is-invalid @enderror"
                                                    value="{{ old('old_password') }}" type="text" name="old_password"
                                                    placeholder="Old Password">
                                                @error('old_password')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>New Password</label>
                                                <input class="form-control @error('password') is-invalid @enderror"
                                                    value="{{ old('password') }}" type="text" name="password"
                                                    placeholder="New Password">
                                                @error('password')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Password Confirmation</label>
                                                <input
                                                    class="form-control @error('password_confirmation') is-invalid @enderror"
                                                    value="{{ old('password_confirmation') }}" type="text"
                                                    name="password_confirmation" placeholder="Password Confirmation">
                                                @error('password_confirmation')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <button type="sumit" class="btn btn-primary mt-2">Update</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->
@endsection
