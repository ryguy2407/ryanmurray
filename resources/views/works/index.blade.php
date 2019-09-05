@extends('layouts.main')

@section('content')

    <div style="position: absolute;top:20px;right:20px;">
        @can('create', App\Work::class)
            <a class="btn btn-primary" href="{{ route('work.create') }}">Add more work</a>
        @endcan
    </div>

    <div class="pt-5">
        <h2 class="text-center">
            A recent sample of projects I've worked on
        </h2>
        <hr class="my-5">

        @foreach ($works->chunk(2) as $work)
            <div class="row">
                @foreach ($work as $work)
                    <div class="col-lg mb-5">
                        <div class="row">
                            <div class="col">
                                <h5>
                                    <a href="{{ route('work.show', $work->slug) }}">{{ $work->title }}</a>
                                </h5>
                                <p>
                                    @parsedown($work->excerpt($work->content))
                                </p>
                            </div>
                            @if($work->featured_image)
                                <div class="col">
                                    <a href="{{ route('work.show', $work->slug) }}">
                                        <img style="width: 100%;" src="{{ route('image.show', $work->featured_image) }}?w=500&h=280&fit=crop" class="mb-2 rounded mx-auto d-block">
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach

        {{ $works->links() }}
    </div>

@stop