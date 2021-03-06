@extends('layouts.main')

@section('content')

    <div class="pt-5">
        <h2 class="text-center">Hi, my name's Ryan, I've been a working web developer since 2009</h2>
        <hr class="my-5">
        <div class="row">
            <div class="col-lg-5">
                <p class="large mb-0">
                    In that time I've seen many changes in our industry, but as with many professions,
                    the fundamentals always remain the same. I strive to create code that fits the job at hand perfectly. I believe this makes
                    for code that is easier to maintain, faster and does just the right amount of
                    heavy lifting.
                </p>
                <div class="text-center mt-5">
                    <a href="{{ secure_url('work') }}" class="btn btn-primary text-white">See all of my recent work</a>
                </div>
            </div>
            <div class="col-lg">
                <img src="/img/graphic.png" alt="" style="width: 100%;">
            </div>
        </div>
    </div>

    <hr class="my-5">

    <h2 class="text-center mb-5">Here are some sites I've worked on...</h2>

    <div class="row">

        @if($tag)
            @foreach($tag->works as $work)
                <div class="col-lg mb-4 mb-lg-0">
                    <div class="card">
                        <a href="{{ route('work.show', $work->slug) }}">
                            <img style="width: 100%;" src="{{ route('image.show', $work->featured_image) }}?w=1200&fit=crop" class="mb-2 rounded mx-auto d-block">
                        </a>
                        <div class="p-4">
                            <h3 class="text-center">{{ $work->title }}</h3>
                            <p>
                                @parsedown($work->excerpt($work->content))
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>

    <div class="text-center mt-5">
        <a href="{{ secure_url('work') }}" class="btn btn-primary text-white">See all of my recent work</a>
    </div>


    <hr class="my-5">

    <h2 class="text-center mb-5">Some of my thoughts on things...</h2>

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
                                    <img style="width: 100%;" src="{{ route('image.show', $post->featured_image) }}?w=500&h=500&fit=crop">
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach

    {{ $posts->links() }}

@stop