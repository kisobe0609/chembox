@extends('layouts.parent')
@section('title', '化学の質問箱 | マイページ')
@section('pageCss')
<link href="{{ asset('/css/mypage.css') }}" rel="stylesheet">
@endsection
@section('content')
<h1>マイページ</h1>

<div class="container frame">
    <h3>ダッシュボード</h3>
    <hr>
    質問数：{{ $post_count }}<br>
    回答数：{{ $reply_count }}
</div>

<div class="container frame">
    <h3>質問一覧</h3>
    <hr>
@foreach($posts as $post)
  <span class="badge badge-primary">{{ $post->category->category_name}}</span>
  @if($post->is_closed == 1)
        <span class="badge badge-success">解決済</span>
      @else
        <span class="badge badge-danger">未解決</span>
      @endif
  <h5>{{ $post->title }}</h5>
@endforeach
</div>

<div class="container frame">
    <h3>回答一覧</h3>
    <hr>
@foreach($replies as $reply)
  <span class="badge badge-primary">{{ $reply->post->category->category_name}}</span>
  <h5>{{ $reply->post->title }}</h5>
  <p>{{ $reply->content }}</p>
@endforeach
</div>

@endsection