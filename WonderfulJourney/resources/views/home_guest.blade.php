@extends('template/guest_template')

@section('content')

    @foreach ($articles as $article)
        <h5>{{ $article->title }}</h5>
    @endforeach

@endsection
