@extends('layouts.parent')
@section('title', '化学の質問箱 | 答える')
@section('pageCss')
<link href="{{ asset('/css/posts.css') }}" rel="stylesheet">
@endsection
@section('content')
<h1>答える</h1>

@foreach($posts as $post)
<div class="container post">
  <span class="btn btn-danger">{{ $post->category->category_name}}</span>
  <h3>{{ $post->title }}</h3>
  {{ $post->content }}
  <hr>
  <form action="{{ route('replies.store') }}" method="POST">
    @csrf
    <input type="hidden" name="post_id" value="{{ $post->id }}">
    <textarea name="content">
    </textarea>
    <input type="submit" value="回答する" class="btn btn-success">
    <hr>
    @foreach($post->replies as $reply)
    {{ $reply->content }}<i class="far fa-thumbs-up"></i><br>
    @endforeach
  </form>
</div>
@endforeach
@endsection