@extends('layouts.frontend')
@section('title', 'Admin - Users')
@section('content')
<div class="top-popular-courses-area mt-20 section-padding-100-70">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center text-white bg-dark p-3">Users</h1>

                <table class="bg-white table table-striped table-bordered table-inverse">
                    <thead class="thead-default">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Reg. No</th>
                            <th>Type</th>
                            <th>Number of Books Uploaded</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td scope="row">{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->reg_num }}</td>
                                <td>{{ $user->type ? 'Lecturer':'Student' }}</td>
                                <td>{{ $user->books->count() }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
