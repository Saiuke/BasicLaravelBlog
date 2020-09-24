<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function __construct()
    {
    //$this->middleware('guest', ['except' => 'destroy']);
    }
    public function create()
    {
        return view('sessions.create');
    }
    public function store()
    {
        if(!Auth::attempt(request(['email', 'password']))){
            return back()->withErrors(
                $message = "Check your credentials and try again."
            );
        }
        session()->flash('message', "You're logged in, welcome back!");
        return redirect('/');
    }
    
    public function destroy()
    {
        Auth::logout();
        return redirect('/');
    }



}
