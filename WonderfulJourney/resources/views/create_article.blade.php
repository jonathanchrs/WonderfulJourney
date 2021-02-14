@extends('template/guest_template')

@section('title', 'Create Article')

@section('content')

    <div class="container pt-5 mt-5">
        <div class="container" style="color: white; text-align: center; width: 50%">
            <h1>New Blog</h1>
            <form action="/create_article" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 mt-5">
                    <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Title">
                </div>
                <select class="form-select" aria-label="category" name="category">
                    <option selected>Category</option>
                    <option value="1">Beach</option>
                    <option value="2">Mountain</option>
                    <option value="3">Lake</option>
                    <option value="4">River</option>
                    <option value="5">Forest</option>
                </select>
                <div class="mb-3 mt-3">
                    <input class="form-control" type="file" id="formFile" name="image">
                </div>
                <div class="mb-3">
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="8" placeholder="Input your story here"></textarea>
                </div>
                @if ($errors->any())
                    <h5 style="color: red">{{ $errors->first() }}</h5>
                @endif
                <button type="submit" class="btn btn-danger" style="width: 100%">Create</button>
            </form>
        </div>


    </div>

@endsection
