@extends('frontend.main_master')

@section('content')

    <div class="body-content">
        <div class="container">
            <div class="row">
                <div class="col-md-2"><br><br>
                    <img class="card-img-top" style="border-radius:50% " src="{{ (!empty(Auth::user()->profile_photo_path)) ?  url('upload/user_images/'.Auth::user()->profile_photo_path): url('upload/no_image.jpg')}}" height="100%" width="100%" alt="">
                    <br><br>
                    <ul class="list-group list-group-flush">
                        <a href="{{route('dashboard')}}" class="btn btn-primary btn-sm btn-block">Home</a>
                        <a href="{{route('user.profile')}}" class="btn btn-primary btn-sm btn-block">Profile Update</a>
                        <a href="{{{route('user.change.password')}}}" class="btn btn-primary btn-sm btn-block">Change Password</a>
                        <a href="{{route('user.logout')}}" class="btn btn-danger btn-sm btn-block">Logout</a>
                    </ul>

                </div>

                <div class="col-md-2"></div>

                <div class="col-md-8">
                    <div class="card">
                        <h3 class="text-center"><span class="text-danger">Hi...</span><strong>
                        Change Password</h3>

                        <div class="card-body">
                            <form action="{{ route('user.password.change') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label class="info-title" for="exampleInputEmail1">Current Password</label>
                                    <input id="oldpassword" type="password" name="oldpassword" class="form-control unicase-form-control text-input">
                                </div>

                                <div class="form-group">
                                    <label class="info-title" for="exampleInputEmail1">New Password</label>
                                    <input type="password" id="password" name="password"  class="form-control unicase-form-control text-input">
                                </div>

                                <div class="form-group">
                                    <label class="info-title" for="exampleInputEmail1">Confirm Password</label>
                                    <input type="password" id="password_confirmation"  name="password_confirmation" class="form-control unicase-form-control text-input">
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
