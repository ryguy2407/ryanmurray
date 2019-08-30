@extends('layouts.main')

@section('content')

    <div class="pt-5">
        <h2 class="text-center">
            Add some work
        </h2>
        <hr class="my-5">
        <form method="post" action="{{ route('work.store') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            @include('works._form', ['submitText' => 'Add Work', 'work' => null])
        </form>
    </div>

    <script>
        var simplemde = new SimpleMDE({ element: document.getElementById("content") });
    </script>

@stop