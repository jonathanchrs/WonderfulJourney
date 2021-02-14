@extends('template/guest_template')

@section('title', 'All Article')

@section('content')

    <div class="container mt-5 pt-5">
        <div class="container">
            <a href={{ url('/show_create_article') }} style="text-decoration: none"><button type="button" class="btn btn-danger">+ Create Blog</button></a>
        </div>

        <div class="container pt-4" style="text-align: center; color: white">
            <h1>Owned Article</h1>
            <table class="table mt-5" style="text-align: center; color: white">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articles as $article)
                        <tr>
                            <form action="/delete_article/{{ $article->id }}" method="POST">
                                @csrf
                                <td><a href="/full_story/{{ $article->id }}" style="text-decoration: none">{{ $article->title }}</a></td>
                                <td><button type="submit" class="btn btn-danger">Delete</button></td>
                            </form>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>

@endsection
