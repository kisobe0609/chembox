<?php

namespace App\Http\Controllers;

use App\Post;
use App\PostCategory;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::where('is_closed', 0)->orderBy('created_at', 'desc')->get();

        return view('posts.index',['posts' => $posts]);
    }

    public function closed()
    {
        $posts = Post::where('is_closed', 1)->orderBy('created_at', 'desc')->get();
        $category_name = '';

        return view('posts.closed', compact('posts', 'category_name'));
    }

    public function closed_category($id)
    {
        $posts = Post::where('is_closed', 1)->where('category_id', $id)->orderBy('created_at', 'desc')->get();
        $category_name = PostCategory::find($id)->category_name;

        return view('posts.closed', compact('posts', 'category_name'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = New Post;
        $post->author_id = $request->author_id;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->category_id = $request->category_id;
        $post->is_closed = 0;
        $post->save();
        
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function solve($id){
        $post = Post::find($id);
        $post->is_closed = 1;
        $post->save();

        return redirect('/posts');
    }
}
