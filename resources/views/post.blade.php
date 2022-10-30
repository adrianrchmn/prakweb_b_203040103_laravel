@extends('layouts.main')

@section('container')
    <h1 class="mb-5">{{ $post->title }}</h1>
    {{-- <h5>{{ $post["author"] }}</h5> --}}

    <p>By. Adrian Rachman in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

    {!! $post->body !!}

    <br>
    <a href="/blog">Back to Posts</a>
    @endsection