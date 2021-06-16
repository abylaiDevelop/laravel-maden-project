<?php

namespace App\Http\Controllers;


use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function store() {
        $attributes = request()->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (auth()->attempt($attributes)) {
            session()->regenerate();

             return redirect('/')->with('success','Welcome Back! ');
        }

        throw ValidationException:: withMessages([
            'username' => 'Your provided credentials could not be verified.'
        ]);


    }

    public function create() {
        return view('sessions.create');
    }

    public function destroy() {
       auth()->logout();

       return redirect('/')->with('success','Goodbye');
    }


}
