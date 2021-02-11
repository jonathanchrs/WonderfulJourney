@extends('template/guest_template')

@section('content')

    <div class="container">

        <h1>Login</h1>
        <form method="POST">
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1" style="width: 100px">Email</span>
                <input type="text" name="name" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1" style="width: 100px">Password</span>
                <input type="text" name="email" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
            </div>
            @if ($errors->any())
                <h5 style="color: red">{{ $errors->first() }}</h5>
            @endif
            <button type="submit" class="btn btn-danger">Login</button>
        </form>
    </div>


@endsection
