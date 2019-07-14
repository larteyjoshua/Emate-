@extends('layouts.frontend')
@section('title', 'Profile')
@section('content')
<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area bg-img" style="background-image:  url('{{ asset('academy/img/bg-img/breadcumb.jpg') }}');">
    <div class="bradcumbContent">
        <h2>Profile</h2>
    </div>
</div>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Top Popular Courses Area Start ##### -->
<div class="top-popular-courses-area mt-50 section-padding-100-70">
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="card">
                  <div class="card-header bg-success text-center">
                      <h4 class="text-white">Change Password
                     </h4>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                      <form method="POST" action="{{ route('user.password.update', $user->id) }}" enctype="multipart/form-data">
                              @csrf
                              @method('PUT')
                              <div class="form-group">
                                  <label>Old Password</label>
                                  <input type="password"  name="oldPassword" value="" class="form-control" placeholder="" required>
                              </div>
                              <div class="form-group">
                                  <label>New Password</label>
                                  <input type="password"  name="password" value="" class="form-control" placeholder="" required>
                              </div>
                              <div class="form-group">
                                  <label>Confirm Password</label>
                                  <input type="password"  name="password_confirmation" value="" class="form-control" placeholder="" required>
                              </div>

                              <div class="form-group text-center">
                                  <button type="submit"  class="text btn btn-success m-b-30 m-t-30">Update</button>
                              </div>
                          </form>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
        </div>
    </div>
</div>
@endsection
