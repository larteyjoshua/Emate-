@extends('layouts.frontend')
@section('title', 'Admin - Categories')
@section('content')
<div class="top-popular-courses-area mt-20 section-padding-100-70">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center text-white bg-dark p-3">Categories</h1>

                <table class="bg-white table table-striped table-bordered table-inverse">
                    <thead class="thead-default">
                        <tr>
                            <th>Name</th>
                            <th>Books</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <td scope="row">{{ $category->name }}</td>
                                <td>{{ $category->books->count() }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
