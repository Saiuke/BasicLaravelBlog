@extends('layouts.master')
@section('content')
    <div class="col-md-8">
        <h1>Create a post</h1>
        <hr>
        <form method="POST" action="/posts/create">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Post title</label>
                <input type="text" class="form-control" id="title" name="title">
                
            </div>
            <div class="form-group">
                <label for="body">Post body</label>
                <textarea type="text" class="form-control" id="title" name="body"></textarea>
                
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Publish</button>
            </div>
            @include('layouts.errors')
        </form>
    </div>
@endsection