@extends('layouts.master')
@section('content')
    <div class="col-md-8">
        <h1>Login</h1>
        <hr>
        <form method="POST" action="/login">
            {{ csrf_field() }}
            <div class="form-group col-md-8">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group col-md-8">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="form-group col-md-8">
                <button type="login" class="btn btn-primary">Login</button>
            </div>
            @include('layouts.errors')
        </form>
    </div>
@endsection