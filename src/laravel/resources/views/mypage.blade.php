@extends('layouts.parent')
@section('title', '化学の質問箱 | マイページ')
@section('pageCss')
<link href="{{ asset('/css/mypage.css') }}" rel="stylesheet">
@endsection
@section('content')
<h1>マイページ</h1>

<div class="container frame">
    <h3>質問一覧</h3>
@foreach($posts as $post)
  <span class="badge badge-danger">{{ $post->category->category_name}}</span>
  <h5>{{ $post->title }}</h5>
@endforeach
</div>

@endsection