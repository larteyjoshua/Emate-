@extends('layouts.frontend')
@section('title', 'Course')
@section('content')
<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area bg-img" style="background-image:  url('{{ asset('academy/img/bg-img/breadcumb.jpg') }}');">
    <div class="bradcumbContent">
        <h2>Our Books</h2>
    </div>
</div>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Top Popular Courses Area Start ##### -->
<div class="top-popular-courses-area mt-50 section-padding-100-70">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                    <h3>Top Popular Books</h3>
                </div>
            </div>
        </div>
        <div class="row">

            <!-- Single Course Area -->
            @foreach ($categories as $category)
            <div class="col-12 col-lg-4">
                <div class="single-course-area d-flex align-items-center mb-100">
                    <div class="course-icon">
                        <i class="fa fa-book"></i>
                    </div>
                    <div class="course-content">
                        <a href="{{ route('category', $category->id) }}"><h4>{{ $category->name }}</h4></a>
                        <p>{{ $category->description }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
