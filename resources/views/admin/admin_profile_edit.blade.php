@extends('admin.admin_master')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@section('admin')

<section class="content">
    <div id="row">
        <div class="box">
            <div class="box-header with-border">
                <h4 class="box-title">Admin Profile Edit</h4>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col">
                        <form novalidate="" method="post" action="{{route('admin.profile.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>Admin User Name<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="name" class="form-control" required=""
                                                        data-validation-required-message="This field is required" value="{{ $editData->name}}">
                                                    <div class="help-block"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>Email Field <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="email" name="email" class="form-control" required=""
                                                        data-validation-required-message="This field is required" value="{{ $editData->email}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>Profile Image <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="file" name="profile_photo_path" class="form-control" required="" id="image">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <img id="showImage" src="{{ (!empty($editData->profile_photo_path)) ?  url('upload/admin_images/'.$editData->profile_photo_path): url('upload/no_image.jpg')}}" alt="" tyle="width:100px ;height:100px">

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


    <script>
        $(document).ready(function(){
            $('#image').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#showImage').attr('src',e.target.result)
                }
                reader.readAsDataURL(e.target.files[0]);
            })
        })

    </script>
@endsection
