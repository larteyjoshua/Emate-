@extends('layouts.frontend')
@section('title', 'Home')
@section('content')
<!-- ##### Hero Area Start ##### -->
<section class="hero-area">
    <div class="hero-slides owl-carousel">

        <!-- Single Hero Slide -->
        <div class="single-hero-slide bg-img" style="background-image:  url('{{ asset('academy/img/bg-img/breadcumb.jpg') }}');">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <h4 data-animation="fadeInUp" data-delay="100ms">All the courses you need</h4>
                            <h2 data-animation="fadeInUp" data-delay="400ms">Welcome to our <br>Online Library</h2>
                            <a href="about-us.html" class="btn academy-btn" data-animation="fadeInUp" data-delay="700ms">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Hero Slide -->
        <div class="single-hero-slide bg-img" style="background-image: url('academy/img/bl.png');">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <h4 data-animation="fadeInUp" data-delay="100ms">All the courses you need</h4>
                            <h2 data-animation="fadeInUp" data-delay="400ms">Welcome to our <br>Online Library</h2>
                            <a href="about-us.html" class="btn academy-btn" data-animation="fadeInUp" data-delay="700ms">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Hero Slide -->
        <div class="single-hero-slide bg-img" style="background-image: url('academy/img/st.jpg');">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <h4 data-animation="fadeInUp" data-delay="100ms">All the courses you need</h4>
                            <h2 data-animation="fadeInUp" data-delay="400ms">Welcome to our <br>Online Library</h2>
                            <a href="about-us.html" class="btn academy-btn" data-animation="fadeInUp" data-delay="700ms">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <!-- Single Hero Slide -->
        <div class="single-hero-slide bg-img" style="background-image: url('academy/img/fine.jpg');">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <h4 data-animation="fadeInUp" data-delay="100ms">All the courses you need</h4>
                            <h2 data-animation="fadeInUp" data-delay="400ms">Welcome to our <br>Online Library</h2>
                            <a href="about-us.html" class="btn academy-btn" data-animation="fadeInUp" data-delay="700ms">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Hero Area End ##### -->

<!-- ##### Top Feature Area Start ##### -->
<div class="top-features-area wow fadeInUp" data-wow-delay="300ms">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="features-content">
                    <div class="row no-gutters">
                        <!-- Single Top Features -->
                        <div class="col-12 col-md-4">
                            <div class="single-top-features d-flex align-items-center justify-content-center">
                                <i class="icon-agenda-1"></i>
                                <h5>E-Books</h5>
                            </div>
                        </div>
                        <!-- Single Top Features -->
                        <div class="col-12 col-md-4">
                            <div class="single-top-features d-flex align-items-center justify-content-center">
                                <i class="icon-assistance"></i>
                                <h5>Amazing Lecturers</h5>
                            </div>
                        </div>
                        <!-- Single Top Features -->
                        <div class="col-12 col-md-4">
                            <div class="single-top-features d-flex align-items-center justify-content-center">
                                <i class="icon-telephone-3"></i>
                                <h5>Great Support</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Top Feature Area End ##### -->

<!-- ##### Course Area Start ##### -->
<div class="academy-courses-area section-padding-100-0">
    <div class="container">
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
