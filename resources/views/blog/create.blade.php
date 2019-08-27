@extends('layouts.main')

@section('content')

    <div class="pt-5">
        <h2 class="text-center">
            Create a blog post
        </h2>
        <hr class="my-5">
        <form method="post" action="{{ route('blog.store') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            @include('blog._form', ['submitText' => 'Create Post', 'post' => null])
        </form>
    </div>

    <script>
        var simplemde = new SimpleMDE({ element: document.getElementById("content") });
    </script>

@stop