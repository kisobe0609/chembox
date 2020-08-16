@extends('layouts.parent')
@section('title', '化学の質問箱 | 質問する')
@section('pageCss')
<link href="{{ asset('/css/ask.css') }}" rel="stylesheet">
@endsection
@section('content')
<h1>質問する</h1>

<div class="container" id="form">
<form action="{{ route('posts.store') }}" method="POST">
  @csrf
  <input type="hidden" name="author_id" value="{{ Auth::id() ?? 1 }}">
  <div class="form-group">
    <label for="title">タイトル</label>
    <input type="text" name="title" class="form-control" id="title" placeholder="タイトル">
  </div>
  <div class="form-group">
    <label for="category">カテゴリー</label>
    <select name="category_id" class="form-control" id="category">
      <option value="1">理論化学</option>
      <option value="2">有機化学</option>
      <option value="3">無機化学</option>
      <option value="4">高分子化合物</option>
      <option value="5">天然有機物</option>
    </select>
  </div>
  <div class="form-group">
    <label for="content">本文</label>
    <textarea name="content" class="form-control" id="content" rows="10"></textarea>
  </div>
  <div class="form-group">
    <label for="attached_file_1">添付ファイル1</label>
    <input type="file" class="form-control-file" id="attached_file_1">
  </div>
  <div class="form-group">
    <label for="attached_file_2">添付ファイル2</label>
    <input type="file" class="form-control-file" id="atteched_file_2">
  </div>
  <div class="form-group">
    <label for="attached_file_3">添付ファイル3</label>
    <input type="file" class="form-control-file" id="attached_file_3">
  </div>
  <button type="submit" class="btn btn-primary">投稿</button>
  <button type="reset" class="btn btn-danger">リセット</button>
</form>
</div>
@endsection