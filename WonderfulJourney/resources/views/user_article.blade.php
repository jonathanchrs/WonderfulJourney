@extends('template/guest_template')

@section('title', 'User Article')

@section('content')

    <div class="container pt-5 mt-5">
        <div class="container" style="color: white; text-align: center">
            <h1>User Article</h1>
            <table class="table mt-5" style="color: white">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
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
