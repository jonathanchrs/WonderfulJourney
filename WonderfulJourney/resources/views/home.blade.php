@extends('template/guest_template')

@section('content')

    <div class="container">
        <h3>Welcome {{Auth::user()->name}}</h3>
    </div>
@endsection
