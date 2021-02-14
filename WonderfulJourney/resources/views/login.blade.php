@extends('template/guest_template')

@section('title', 'Login')

@section('content')

    <div class="container mt-5 pt-4">
        <div class="container pt-5" style="color: white; width: 50%; text-align: center">
            <h1>Login</h1>
            <form action="/do_login" method="POST">
                @csrf
                <select class="form-select mt-5" aria-label="role" name="role">
                    <option selected>Login as</option>
                    <option value="1">Admin</option>
                    <option value="2">User</option>
                </select>
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="basic-addon1" style="width: 100px">Email</span>
                    <input type="text" name="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1" style="width: 100px">Password</span>
                    <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                </div>
                @if ($errors->any())
                    <h5 style="color: red">{{ $errors->first() }}</h5>
                @endif
                <button type="submit" class="btn btn-danger" style="width: 100%">Login</button>
            </form>
        </div>

    </div>


@endsection
