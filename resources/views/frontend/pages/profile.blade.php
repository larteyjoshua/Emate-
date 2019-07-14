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
                      <h4 class="text-white">You may update your profile
                     </h4>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                      <form method="POST" action="{{ route('user.update', $user->id) }}" enctype="multipart/form-data">
                              @csrf
                              @method('PUT')
                              <div class="form-group">
                                  <label>Name</label>
                                  <input type="text"  name="name" value="{{ $user->name }}" class="form-control" placeholder="" required>
                              </div>
                              <div class="form-group">
                                  <label>Registration Number</label>
                                  <input type="text"  name="registrationNumber" value="{{ $user->reg_num }}" class="form-control" placeholder="" required>
                              </div>
                              <div class="form-group">
                                  <label>Email</label>
                                  <input type="email"  name="email" value="{{ $user->email }}" class="form-control" placeholder="" required>
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
