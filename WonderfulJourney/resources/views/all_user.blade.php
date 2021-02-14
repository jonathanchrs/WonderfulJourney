@extends('template/guest_template')

@section('title', 'All User')

@section('content')

    <div class="container mt-5 pt-5" style="color: white">
        <div class="container" style="text-align: center">
            <h1>All User</h1>
            <table class="table mt-5" style="color: white">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <form action="/delete_user/{{ $user->id }}" method="POST">
                                @csrf
                                <td><a href="/user_article/{{ $user->id }}" style="text-decoration: none">{{ $user->name }}</a></td>
                                <td>{{ $user->email }}</td>
                                <td><button type="submit" class="btn btn-danger">Delete</button></td>
                            </form>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>


@endsection
