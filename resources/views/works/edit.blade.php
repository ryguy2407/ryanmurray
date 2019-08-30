@extends('layouts.main')

@section('content')

    <div class="pt-5">
        <h2 class="text-center">
            Update {{ $work->title }}
        </h2>
        <hr class="my-5">
        <form method="post" action="{{ route('work.update', $work->id) }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('PUT')
            <form method="post" action="{{ route('work.store') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                @include('works._form', ['submitText' => 'Update Work', 'work' => $work])
            </form>
        </form>
    </div>

    <script>
        var simplemde = new SimpleMDE({ element: document.getElementById("content") });
    </script>

@stop