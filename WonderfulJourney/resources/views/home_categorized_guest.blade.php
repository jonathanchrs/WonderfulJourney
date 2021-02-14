@extends('template/guest_template')

@section('title', 'Category')

@section('content')

    <div class="bg-dark" style="height: 350px">
        <div class="container pt-5" style="text-align: center; color: white">
            <h1 class="mt-5">Wonderful Journey</h1>
            <h4>Blog of Indonesian Tourism</h4>
        </div>
    </div>
    <div class="container mt-5">
        <hr style="border: 1px solid white">
    </div>
    <div class="bg-dark mt-5">
        <div class="container" style="color: black; text-align: center">
            <div class="row">
                @foreach ($articles as $article)
                    <div class="col-4 mt-4">
                        @php
                            $desc = substr($article->description, 0, strlen($article->description) / 4) . '...';
                        @endphp
                        <div class="card h-100" style="width: 100%;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $article->title }}</h5>
                                <p class="card-text">{{ $desc }}</p>
                                <a href="#" class="btn btn-danger">Full Story ></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
