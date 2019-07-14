@extends('layouts.frontend')
@section('title', 'Books')
@section('content')
<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area bg-img" style="background-image: url('{{ asset('academy/img/bg-img/breadcumb.jpg') }}');">
    <div class="bradcumbContent">
        <h2>{{ $category->name }} Books</h2>
    </div>
</div>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Top Popular Courses Area Start ##### -->
<div class="top-popular-courses-area mt-50 section-padding-100-70">
    <div class="container">
        <div class="row">
            @foreach ($category->books->where('approved', true) as $book)
                <div class="col-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="500ms" data-container="body" data-toggle="popover" data-placement="bottom" data-content="{{ $book->description }}">
                        <div class="course-icon">
                            <i class="fa fa-book"></i>
                        </div>
                        <div class="course-content">
                             <a href="{{ route('book', $book->id) }}" target="_blank" ><h4>{{ $book->title }}</h4></a>
                            <p>{{ $book->description }}</p>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
    </div>
</div>
<!-- ##### Course Area End ##### -->
@endsection
