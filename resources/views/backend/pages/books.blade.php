@extends('layouts.frontend')
@section('title', 'Admin - Books')
@section('content')
<div class="top-popular-courses-area mt-20 section-padding-100-70">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center text-white bg-dark p-3">Books</h1>

                <table class="bg-white table table-striped table-bordered table-inverse">
                    <thead class="thead-default">
                        <tr>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Approved</th>
                            <th>ISBN</th>
                            <th>Uploaded By</th>
                            <th>Uploaded At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $book)
                            <tr>
                                <td scope="row">{{ $book->title }}</td>
                                <td>{{ $book->author }}</td>
                                <td>{{ $book->isbn }}</td>
                                <td>{{ $book->approved ? 'Yes':'No' }}</td>
                                <td>{{ $book->user->email }}</td>
                                <td>{{ date('D, d M, Y', strtotime($book->created_at)) }}</td>
                                <td>
                                    @if ($book->approved)
                                    <form class="pull-left" action="{{ route('admin.book.disapprove', $book->id) }}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-warning"role="button"><i class="fa fa-times"></i></button>
                                    </form>
                                    @else
                                    <form class="pull-left" action="{{ route('admin.book.approve', $book->id) }}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-success"role="button"><i class="fa fa-thumbs-up"></i></button>
                                    </form>
                                    @endif

                                    <form class="pull-left" action="{{ route('admin.book.destroy', $book->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"role="button"><i class="fa fa-trash-o"></i></button>
                                    </form>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
