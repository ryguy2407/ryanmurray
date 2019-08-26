@extends('layouts.main')

@section('content')

    <div class="pt-5">
        <h2 class="text-center">
            Create a blog post
        </h2>
        <hr class="my-5">
        <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="title">
                </div>
                <div class="form-group col-md-6">
                    <label for="slug">Slug</label>
                    <input type="text" name="slug" class="form-control" id="slug" placeholder="Slug">
                </div>
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" rows="3" name="content" id="content"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create Post</button>
        </form>
    </div>

    <hr class="my-5">

    <p class="text-center mb-5">
        <a href="http://laravel.com" target="_blank">Proudly built using Laravel</a> - Ryan Murray 2019
    </p>

    <script>
        var simplemde = new SimpleMDE({ element: document.getElementById("content") });
    </script>

@stop