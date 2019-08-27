@extends('layouts.main')

@section('content')

    <div class="pt-5">
        <h2 class="text-center">
            Update {{ $post->title }}
        </h2>
        <hr class="my-5">
        <form method="post" action="{{ route('blog.update', $post->id) }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('PUT')
            <form method="post" action="{{ route('blog.store') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                @include('blog._form', ['submitText' => 'Update Post', 'post' => $post])
            </form>
        </form>
    </div>

    <script>
        var simplemde = new SimpleMDE({ element: document.getElementById("content") });
    </script>

@stop