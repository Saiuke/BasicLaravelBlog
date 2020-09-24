<?php

namespace App\Http\Controllers;

use App\Post;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['show', 'index']);
    }
    
    public function index()
    {
        
        //return session('message');
        
        $posts = Post::latest()
        ->filter(request(['month', 'year']))
        ->get();

        return view('posts.index', compact('posts'));
    }
    
    public function show(Post $post)
    {
        
        return view('posts.show', compact('post'));
    }
    
    public function create()
    {
        return view('posts.create');
    }
    
    public function store()
    {
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required',
        ]);

        auth()->user()->publish(
            new Post(request(['title', 'body']))
        );

        /* $newPost = Post::create([
            'title' => request('title'),
            'body' => request('body'),
            'user_id' => auth()->id()
        ]); */

        return redirect('/');
    }
}
