@extends('layouts.main')

@section('content')

    <div class="pt-5">
        <h2 class="text-center">
            {{ $post->title }}
        </h2>
        <hr class="my-5">
        <div class="row">
            <div class="col">
                <img src="{{ $post->featured_image }}" class="mb-5 rounded mx-auto d-block">
                @parsedown($post->content)
            </div>
        </div>
    </div>

@stop