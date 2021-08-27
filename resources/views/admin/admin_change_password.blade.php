@extends('admin.admin_master')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@section('admin')

<section class="content">
    <div id="row">
        <div class="box">
            <div class="box-header with-border">
                <h4 class="box-title">Admin Change Password</h4>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col">
                        <form novalidate="" method="post" action="{{route('update.change.password')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>Current Password<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input name="oldpassword" class="form-control" id="current_password" type="password"  value="">
                                                    <div class="help-block"></div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <h5>New Password<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input name="password" class="form-control" id="password" type="password"  value="">
                                                    <div class="help-block"></div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <h5>Confirm Password<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation"  value="">
                                                    <div class="help-block"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="text-xs-right">
                                    <input type="submit" value="Submit" class="btn btn-rounded btn-info">
                                </div>
                        </form>

                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.box-body -->
        </div>
    </div>
    </div>


@endsection
