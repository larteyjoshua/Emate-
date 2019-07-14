@extends('layouts.frontend')
@section('title', 'Admin - Dashboard')
@section('content')
<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area bg-img" style="background-image:  url('{{ asset('academy/img/bg-img/breadcumb.jpg') }}');">
    <div class="bradcumbContent">
        <h2>Dashboard</h2>
    </div>
</div>
<!-- ##### Breadcumb Area End ##### -->
<div class="top-popular-courses-area mt-50 section-padding-100-70">
    <div class="container">
        <div class="row">
            <div class="col-4 col-xs-12">
                <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="500ms">
                    <div class="course-icon">
                        <i class="fa fa-pencil"></i>
                    </div>
                    <div class="course-content">
                        <h4>Lecturers</h4>
                        <p>{{ $lecturers_count }}</p>
                    </div>
                </div>
            </div>
            <div class="col-4 col-xs-12">
                <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="500ms">
                    <div class="course-icon">
                        <i class="fa fa-graduation-cap"></i>
                    </div>
                    <div class="course-content">
                        <h4>Students</h4>
                        <p>{{ $students_count }}</p>
                    </div>
                </div>
            </div>
            <div class="col-4 col-xs-12">
                <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="500ms">
                    <div class="course-icon">
                        <i class="fa fa-book"></i>
                    </div>
                    <div class="course-content">
                        <h4>Books</h4>
                        <p>{{ $books_count }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
