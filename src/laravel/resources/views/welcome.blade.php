@extends('layouts.parent')
@section('title', '化学の質問箱!')
@section('content')
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    化学の質問箱!
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
