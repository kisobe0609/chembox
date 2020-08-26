<?php

namespace App\Http\Controllers;

use App\Post;
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
        return view('welcome');
    }

    public function home()
    {
        return view('home');
    }

    public function ask()
    {
        return view('ask');
    }

    public function mypage()
    {
        $posts = Post::where('author_id', Auth::user()->id)->orderBy('created_at', 'desc')->get();
        return view('mypage', ['posts' => $posts]);
    }
}
