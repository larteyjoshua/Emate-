@extends('layouts.frontend')
@section('title', 'Upload Files')
@section('content')
<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area bg-img" style="background-image:  url('{{ asset('academy/img/bg-img/breadcumb.jpg') }}');">
    <div class="bradcumbContent">
        <h2>Uploaing a Book</h2>
    </div>
</div>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Top Popular Courses Area Start ##### -->
<div class="top-popular-courses-area mt-50 section-padding-100-70">
    <div class="container">

        <form action="{{ route('upload_file') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <input name="title" value="{{ old('title') }}" type="text" class="form-control" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <input name="author" value="{{ old('author') }}" type="text" class="form-control" placeholder="Author">
                    </div>
                    <div class="form-group">
                        <input name="isbn" value="{{ old('isbn') }}" type="text" class="form-control" placeholder="ISBN">
                    </div>
                    <div class="form-group">
                        <p>CATEGORY&nbsp;</p>
                        <select class="form-control" name="category">
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ $category->id === old('category') ? 'selected':'' }}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <input placeholder="PDF" type="file" name="file" value="">
                    </div>
                    <div class="form-group edit-ta-resize">
                        <textarea class="p-2" name="comments" placeholder="Comments">{{ old('comments') }}</textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="payment-adress">
                        <button type="submit" class="btn btn-success waves-effect waves-light">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- ##### Course Area End ##### -->
@endsection
