<?php

namespace App\Http\Controllers;

use App\User;
use App\Reply;
use App\Post;
use App\Notifications\PostReplied;
use App\Notifications\ChosenAsBestAnswer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ReplyController extends Controller
{
    public function store(Request $request)
    {
        $reply = New Reply;
        $reply->author_id = $request->author_id;
        $reply->post_id = $request->post_id;
        $reply->content = $request->content;
        $reply->save();
        $post_author = Post::find($request->post_id)->author_id;
        $post_title = Post::find($request->post_id)->title;
        User::find($post_author)->notify(new PostReplied($post_title));
        
        return redirect('/posts');
    }

    public function closePost($id){

        $reply = Reply::find($id);

        if(Auth::user()->id ?? 1 == $reply->post->author_id){
            $reply->is_bestanswer = 1;
            $post = Post::find($reply->post->id);
            $post->is_closed = 1;
            $reply->save();
            $post->save();
            $reply_author = Reply::find($id)->author_id;
            User::find($reply_author)->notify(new ChosenAsBestAnswer);
    
            return redirect('/posts');
        }
        else {
            echo '権限がありません';
        }
    }
}