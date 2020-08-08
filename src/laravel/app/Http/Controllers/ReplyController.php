<?php

namespace App\Http\Controllers;

use App\Reply;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    public function store(Request $request)
    {
        $reply = New Reply;
        $reply->post_id = $request->post_id;
        $reply->content = $request->content;
        $reply->save();
        
        return redirect('/posts');
    }
}