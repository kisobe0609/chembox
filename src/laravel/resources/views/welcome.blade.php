@extends('layouts.parent')
@section('title', '化学の質問箱')
@section('pageCss')
<link href="{{ asset('/css/welcome.css') }}" rel="stylesheet">
@endsection
@section('content')
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    化学の質問箱
                </div>

                <div class="links">
                    <a href="#">理論化学</a>
                    <a href="#">有機化学</a>
                    <a href="#">無機化学</a>
                    <a href="#">高分子化合物</a>
                    <a href="#">天然有機物</a>
                </div>
            </div>
        </div>
@endsection
