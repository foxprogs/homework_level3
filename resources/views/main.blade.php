@extends('layout.app')

@section('title', 'Главная')

@section('content')

<h3 class="pb-4 mb-4 font-italic border-bottom">
    From the Firehose
</h3>

@foreach($posts as $post)
<div class="blog-post">
    <a href="{{route('post.show', [$post])}}"><h3 class="blog-post-title">{{$post->title}}</h3></a>
    <p class="blog-post-meta">{{$post->created_at}}</p>
    <p>
    {!!$post->short_text!!}
    </p>
</div><!-- /.blog-post -->
@endforeach
@endsection
