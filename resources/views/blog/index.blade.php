@extends('layouts.main')

@section('content')

    <div class="pt-5">
        <h2 class="text-center">
            All posts
        </h2>
        <hr class="my-5">

        @foreach ($posts->chunk(2) as $post)
            <div class="row">
                @foreach ($post as $post)
                    <div class="col-lg mb-5">
                        <div class="row">
                            <div class="col">
                                <h5>
                                    <a href="{{ route('blog.show', $post->id) }}">{{ $post->title }}</a>
                                </h5>
                                <p>
                                    @parsedown($post->excerpt($post->content))
                                </p>
                            </div>
                            @if($post->featured_image)
                                <div class="col">
                                    <a href="{{ route('blog.show', $post->id) }}">
                                        <img style="width: 100%;" src="{{ asset('storage/'.$post->featured_image) }}">
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach

        {{ $posts->links() }}
    </div>

@stop