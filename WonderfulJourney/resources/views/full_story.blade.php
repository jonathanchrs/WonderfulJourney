@extends('template/guest_template')

@section('title', 'Full Story')

@section('content')

    <div class="container mt-5 pt-5">
        <div class="container" style="color: white">
            <div class="row">
                <h1>{{ $article->title }}</h1>
                <div class="col-5 mt-4">
                    <img src="{{ url('assets/' . $article->image) }}" alt="" style="width: 100%">
                    <button type="button" class="btn btn-danger mt-3" style="width: 100%" onclick="history.back()">Back</button>
                </div>
                <div class="col-7 mt-4">
                    <p style="text-align: justify">{{ $article->description }}</p>
                </div>
            </div>
        </div>
    </div>

@endsection
