@extends('layouts.main')

@section('content')

    <div style="position: absolute;top:20px;right:20px;">
        @can('create', App\Blog::class)
            <a class="btn btn-primary" href="{{ route('blog.create') }}">Add more posts</a>
        @endcan
    </div>

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
                                    <a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a>
                                </h5>
                                <p>
                                    @parsedown($post->excerpt($post->content))
                                </p>
                            </div>
                            @if($post->featured_image)
                                <div class="col">
                                    <a href="{{ route('blog.show', $post->slug) }}">
                                        <img style="width:100%;" src="{{ route('image.show', $post->featured_image) }}?w=500&h=500&fit=crop"
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