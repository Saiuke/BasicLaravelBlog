<?php

namespace App\Http\Controllers;

use App\Mail\Welcome;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    public function create(){
        return view('registration.create');
    }
    public function store()
    {
        //Validate data
        $this->validate(request(), [
            'name' => 'required|min:6',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

        $newUser = [
            'password' => bcrypt(request('password')),
            'name' => request('name'),
            'email' => request('email')
        ];

        //Create user
        $user = User::create($newUser);

        //Sign-in new user
        Auth::login($user);

        //Send Welcome e-mail
        \Mail::to($user)->send(new Welcome($user));

        //Message
        session()->flash('message', 'Thanks for signing up!');

        //Redirect
        return redirect()->home();
    }
}
