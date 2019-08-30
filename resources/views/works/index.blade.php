@extends('layouts.main')

@section('content')

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
                                        <img style="width: 100%;" src="{{ asset('storage/'.$work->featured_image) }}">
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