@extends('layout.app')

@section('title', 'Главная')

@section('content')

<div class="blog-post">
    <h2 class="blog-post-title">{{ $post->title }}</h2>
    <p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }}</p>
    <br>
    {!! $post->content !!}
</div><!-- /.blog-post -->
<a href="{{route('post.index')}}">На главную</a>
@endsection
