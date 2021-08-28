@extends('admin.admin_master')

@section('admin')
<section class="content">
    <div class="row">
        <div class="col-8">

            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Data Table With Full Features</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>

        <div class="col-4">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Add Brands</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">
                        <h5>Brand En<span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input name="oldpassword" class="form-control" id="current_password" type="password"
                                value="">
                            <div class="help-block"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <h5>Brand Ban<span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input name="password" class="form-control" id="password" type="password" value="">
                            <div class="help-block"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <h5>Brand Slug En<span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="password" name="password_confirmation" class="form-control"
                                id="password_confirmation" value="">
                            <div class="help-block"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <h5>Brand Slug Hindi<span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="password" name="password_confirmation" class="form-control"
                                id="password_confirmation" value="">
                            <div class="help-block"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <h5>Brand Image<span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="file" class="form-control">
                            <div class="help-block"></div>
                        </div>
                    </div>

                    <div class="form-group">

                        <div class="controls">
                            <button type="submit" class="btn btn-success btn-sm btn-block">Submit</button>
                            <div class="help-block"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
</section>
@endsection
