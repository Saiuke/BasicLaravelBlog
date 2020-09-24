<div class="blog-post">
    <h2 class="blog-post-title">
        <a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>
    <p class="blog-post-meta">{{$post->created_at->toFormattedDateString()}}</p>
    {{$post->body}}
    <span class="muted">
        @foreach ($post->tags as $tag)
        <a href="/posts/tags/{{$tag->name}}">
            #{{$tag->name}}
        </a>
        @endforeach
    </span> 
</div><!-- /.blog-post -->