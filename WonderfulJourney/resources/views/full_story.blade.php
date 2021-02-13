@extends('template/guest_template')

@section('content')

    <div class="container">
        <h1>{{ $article->title }}</h1>
        <img src="{{ url('assets/' . $article->image) }}" alt="">
        <p>{{ $article->description }}</p>
    </div>

@endsection
