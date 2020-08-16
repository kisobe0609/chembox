@extends('layouts.parent')
@section('title', '化学の質問箱 | 答える')
@section('pageCss')
<link href="{{ asset('/css/posts.css') }}" rel="stylesheet">
@endsection
@section('content')
<h1>答える</h1>

@foreach($posts as $post)
<div class="container post">
  <span class="badge badge-danger">{{ $post->category->category_name}}</span>
  <h3>{{ $post->title }}</h3>
  {{ $post->content }}<br>
  投稿者：{{ $post->author->name }}<br>
  {{ $post->created_at->format('Y年m月d日 H:i:s') }}
  <br>
  <a href="/posts/{{ $post->id }}/solve" class="btn btn-success">
  解決<i class="far fa-lightbulb"></i>
  </a>
  <hr>
  <form action="{{ route('replies.store') }}" method="POST">
    @csrf
    <input type="hidden" name="author_id" value="{{ Auth::id() ?? 1 }}">
    <input type="hidden" name="post_id" value="{{ $post->id }}">
    <textarea name="content"></textarea>
    <input type="submit" value="回答する" class="btn btn-primary">
    <hr>
    @foreach($post->replies as $reply)
    {!! nl2br(e($reply->content)) !!}<br>
    回答者：{{ $reply->author->name }}<br>
    {{ $reply->created_at->format('Y年m月d日 H:i:s') }}<br>
    @endforeach
  </form>
</div>
@endforeach
@endsection