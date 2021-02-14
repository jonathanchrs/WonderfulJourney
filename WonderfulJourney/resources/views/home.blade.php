@extends('template/guest_template')

@section('title', 'Home')

@section('content')

    <div class="container mt-5 pt-5" style="color: white">
        <div class="container" style="text-align: center">
            <h2>Welcome {{ Auth::user()->name }} !!</h2>
        </div>
    </div>
@endsection
