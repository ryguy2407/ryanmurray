@extends('layouts.main')

@section('content')

    <div style="position: absolute;top:20px;right:20px;">
        @can('update', $work)
        <a class="btn btn-primary" href="{{ route('work.edit', $work->id) }}">Edit this work</a>
        @endcan
    </div>

    <div class="pt-5">
        <h2 class="text-center">
            {{ $work->title }}
        </h2>
        <hr class="my-5">
        @if($work->featured_image)
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <a href="@if($work->link){{ $work->link }}@endif" target="_blank">
                        <img style="width: 100%;" src="{{ route('image.show', $work->featured_image) }}?w=1200&fit=crop" class="mb-5 rounded mx-auto d-block">
                    </a>
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                @parsedown($work->content)
            </div>
        </div>
    </div>

@stop