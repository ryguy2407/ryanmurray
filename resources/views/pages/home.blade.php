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
                    heavy lifting. Why build a full feature CMS for a five page site...am I right?
                </p>
            </div>
            <div class="col-lg">
                <img src="/img/graphic.png" alt="" style="width: 100%;margin-top: -40px;">
            </div>
        </div>
    </div>

    <hr class="my-5">

    <h2 class="text-center mb-5">Here is some stuff I've worked on...</h2>

    <div class="row">
        <div class="col-lg">
            <div class="card">
                <a href="http://vision.org.au" target="_blank">
                    <img src="/img/vision.jpg" alt="Vision Christian Radio" style="width: 100%;">
                </a>
                <div class="p-4">
                    <h3 class="text-center">Vision Radio</h3>
                    <p>
                        A website I built using Wordpress Multi-Site while working at
                        <a href="http://newwordorder.com.au" target="_blank">New Word Order.</a>
                        This site utilised custom API's and JSON datafeeds to display live streamed
                        content.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg">
            <div class="card">
                <a href="http://amgsuper.com.au" target="_blank">
                    <img src="/img/amg.jpg" alt="AMG Super" style="width: 100%;">
                </a>
                <div class="p-4">
                    <h3 class="text-center">AMG Super</h3>
                    <p>
                        A super fund website, built while I was at
                        <a href="http://newwordorder.com.au" target="_blank">New Word Order.</a>
                        This site featured an integrated PDF generator that prefilled PDF's from
                        online forms as well as a premium calculator using JS.
                    </p>
                </div>

            </div>
        </div>
        <div class="col-lg">
            <div class="card">
                <img src="/img/daynes.jpg" alt="Daynes Property" style="width: 100%;">
                <div class="p-4">
                    <h3 class="text-center">Daynes Property</h3>
                    <p>
                        This site is still under construction but is largely finished.
                        Built on <a href="http://statamic.com" target="_blank">Statamic</a>
                        I created a custom addon to fetch listings from
                        <a href="https://www.geteagle.com.au/" target="_blank">EAGLE CRM</a>
                        that updates listings via a cron schedule.
                    </p>
                </div>
            </div>
        </div>
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
                                <a href="{{ route('blog.show', $post->id) }}">{{ $post->title }}</a>
                            </h5>
                            <p>
                                {{ $post->excerpt($post->content) }}
                            </p>
                        </div>
                        <div class="col">
                            <a href="{{ route('blog.show', $post->id) }}">
                                <img src="{{ $post->featured_image }}" style="width: 100%;">
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach

    {{ $posts->links() }}

@stop