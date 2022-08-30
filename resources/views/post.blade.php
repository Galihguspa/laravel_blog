@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post->title }}</h2>
        <p><a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        <p>{!! $post['body'] !!} </p >
    </article>

    <a href="/posts">Back to Posts</a>
@endsection