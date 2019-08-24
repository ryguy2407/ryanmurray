@extends('layouts.main')

@section('content')

    <div class="py-5">
        @foreach($sections as $section)
            <div class="row pb-4">
                @foreach($section->blocks as $block)
                    <div class="col">
                        @if($block->block_type == 'markdown')
                            @parsedown($block->block_content)
                        @endif
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>

@stop