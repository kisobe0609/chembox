@extends('layouts.parent')
@section('title', '化学の質問箱')
@section('pageCss')
<link href="{{ asset('/css/welcome.css') }}" rel="stylesheet">
@endsection
@section('content')
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    <i class="fas fa-question"></i>化学の質問箱<i class="fas fa-flask"></i>
                </div>

                <div class="links" id="links">
                    <a href="#">理論化学</a>
                    <a href="#">有機化学</a>
                    <a href="#">無機化学</a>
                    <a href="#">高分子化合物</a>
                    <a href="#">天然有機物</a>
                </div>
                <div class="container">
                <form>
                    <input class="form-control form-control-lg mr-sm-2" type="search" aria-label="Search" id="search-input">
                    <button class="btn btn-success" type="submit" id="search-button">検索</button>
                </form>
                </div>
            </div>
        </div>
@endsection
