@extends('template/guest_template')

@section('title', 'Update Profile')

@section('content')

    <div class="container mt-5 pt-5">
        <div class="container pt-5" style="color: white; width: 50%; text-align: center">
            <h1>Update Profile</h1>

            <form action="/update_profile" method="POST">
                @csrf
                <div class="input-group mb-3 mt-5">
                    <span class="input-group-text" id="basic-addon1" style="width: 100px">Name</span>
                    <input type="text" name="name" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1" style="width: 100px">Email</span>
                    <input type="text" name="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1" style="width: 100px">Phone</span>
                    <input type="text" name="phone" class="form-control" placeholder="Phone" aria-label="Phone" aria-describedby="basic-addon1">
                </div>
                @if ($errors->any())
                    <h5 style="color: red">{{ $errors->first() }}</h5>
                @endif
                <button type="submit" class="btn btn-danger" style="width: 100%">Update</button>
            </form>
        </div>
    </div>

@endsection
