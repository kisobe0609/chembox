<?php

namespace App\Http\Controllers;

use App\Post;
use App\PostCategory;
use App\Reply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = PostCategory::get();

        return view('welcome', compact('categories'));
    }

    public function home()
    {
        return view('home');
    }

    public function ask()
    {
        $categories = PostCategory::get();

        return view('ask', compact('categories'));
    }

    public function mypage()
    {
        $categories = PostCategory::get();
        
        $posts = Post::where('author_id', Auth::user()->id)->orderBy('created_at', 'desc')->get();
        $post_count = Post::where('author_id', Auth::user()->id)->count();
        $post_count_closed = Post::where('author_id', Auth::user()->id)->where('is_closed', 1)->count();
        $bestanswers = Reply::where('author_id', Auth::user()->id)->where('is_bestanswer', 1)->orderBy('created_at', 'desc')->get();
        $replies = Reply::where('author_id', Auth::user()->id)->where('is_bestanswer', 0)->orderBy('created_at', 'desc')->get();
        $reply_count = Reply::where('author_id', Auth::user()->id)->count();
        $bestanswer_count = Reply::where('author_id', Auth::user()->id)->where('is_bestanswer', 1)->count();
        return view('mypage', compact('posts', 'post_count', 'post_count_closed', 'bestanswers', 'replies', 'reply_count', 'bestanswer_count', 'categories'));
    }
}
