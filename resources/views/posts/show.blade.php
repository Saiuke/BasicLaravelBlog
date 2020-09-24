@extends('layouts.master')
@section('content')
<div class="col-md-8">
    <div class="blog-post">
        <h2 class="blog-post-title">
            <a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>
        <p class="blog-post-meta">{{$post->created_at->toFormattedDateString()}}</p>
        {{$post->body}}
        <hr>
        @if (count($post->tags))
        <span class="muted">Tags:
            @foreach ($post->tags as $tag)
            <a href="/posts/tags/{{$tag->name}}">
                #{{$tag->name}}
            </a>
            @endforeach
        </span> 
        @endif
        <hr>
        Published by <strong>{{$post->user->name}}</strong>, {{$post->created_at->diffForHumans()}}
    </div><!-- /.blog-post -->
    <div class="comments">
        <h2>Comments</h2>
        <br>
        <ul class="list-group">
            @foreach ($post->comments as $comment)
                <li class="list-group-item">
                    <strong>
                        
                    </strong>
                    {{$comment->body}} - by <strong>{{$comment->user->name}}</strong>, {{$comment->created_at->diffForHumans()}}
                </li>
            @endforeach
        </ul>
    </div>
    <br>
    <div class="newComment">
         <form method="POST" action="/posts/{{$post->id}}/createComment">
            {{ csrf_field() }}
            <div class="form-group">
                <textarea type="text" class="form-control" id="body" name="body" placeholder="Write your comment here"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Publish</button>
            </div>
            @include('layouts.errors')
        </form>
    </div>
</div>
@endsection
