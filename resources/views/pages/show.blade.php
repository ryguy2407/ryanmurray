@extends('layouts.main')

@section('content')

    <h1>{{ $page->title }}</h1>

    @parsedown($page->content)

@stop