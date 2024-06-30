@extends('posts.layout')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>
    <a href="{{ route('posts.index') }}" class="btn btn-primary">Back to Posts</a>
@endsection
