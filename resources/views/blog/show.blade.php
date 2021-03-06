@extends('layouts.main')

@section('content')

    <div style="position: absolute;top:20px;right:20px;">
        @can('update', $post)
            <a class="btn btn-primary" href="{{ route('blog.edit', $post->id) }}">Edit this post</a>
        @endcan
    </div>

    <div class="pt-5">
        <h2 class="text-center">
            {{ $post->title }}
        </h2>
        <hr class="my-5">
        @if($post->featured_image)
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <img style="width: 100%;" src="{{ asset('storage/'.$post->featured_image) }}" class="mb-5 rounded mx-auto d-block">
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                @parsedown($post->content)
            </div>
        </div>
    </div>

@stop