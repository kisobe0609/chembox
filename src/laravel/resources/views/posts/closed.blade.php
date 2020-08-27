@extends('layouts.parent')
@section('title', '化学の質問箱 | 調べる')
@section('pageCss')
<link href="{{ asset('/css/posts.css') }}" rel="stylesheet">
@endsection
@section('content')
<h1>調べる {{ $category_name }}</h1>

@foreach($posts as $post)
<div class="container post">
  <span class="badge badge-primary">{{ $post->category->category_name}}</span>
  <h3>{{ $post->title }}</h3>
  {{ $post->content }}<br>
  投稿者：{{ $post->author->name }}<br>
  {{ $post->created_at->format('Y年m月d日 H:i:s') }}
    <hr>
    @foreach($post->replies as $reply)
      @if($reply->is_bestanswer == 1)
        <div class="bestanswer">
        <span class="badge badge-success">ベストアンサー</span><br>
        {!! nl2br(e($reply->content)) !!}<br>
        回答者：{{ $reply->author->name }}<br>
        {{ $reply->created_at->format('Y年m月d日 H:i:s') }}<br>
        </div>
      @endif
    @endforeach
    @foreach($post->replies as $reply)
      @if($reply->is_bestanswer == 0)
        {!! nl2br(e($reply->content)) !!}<br>
        回答者：{{ $reply->author->name }}<br>
        {{ $reply->created_at->format('Y年m月d日 H:i:s') }}<br>
      @endif
    @endforeach
</div>
@endforeach
@endsection