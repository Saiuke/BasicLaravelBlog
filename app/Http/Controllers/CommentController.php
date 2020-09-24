<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use App\Post;

class CommentController extends Controller
{
    public function store(Post $post){
        $this->validate(request(), [
            'body' => 'required|min:3',
        ]);
        
        $post->addComment(request('body'));

        return back();
    }

}
