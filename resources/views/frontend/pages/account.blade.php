@extends('layouts.frontend')
@section('title', 'Account')
@section('content')
<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area bg-img" style="background-image:  url('{{ asset('academy/img/bg-img/breadcumb.jpg') }}');">
    <div class="bradcumbContent">
        <h2>Account Activity</h2>
    </div>
</div>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Top Popular Courses Area Start ##### -->
<div class="top-popular-courses-area mt-50 section-padding-100-70">
    <div class="container">
        <div class="row">
            <div class="col">
                <a href="{{ route('upload_page') }}" id="" class="btn academy-btn btn-lg btn-block"><i class="fa fa-upload"></i> Upload Books</a>
            </div>
            <div class="col">
                <a href="{{ route('user.edit', auth()->id()) }}" id="" class="btn academy-btn btn-lg btn-block"><i class="fa fa-user"></i> Update Profile</a>
            </div>
            <div class="col">
                <a href="{{ route('user.password.page', auth()->id()) }}" id="" class="btn academy-btn btn-lg btn-block"><i class="fa fa-user"></i> Change Password</a>
            </div>
        </div>
    </div>
</div>
@endsection
