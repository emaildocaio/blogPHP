<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Psy\CodeCleaner\FunctionReturnInWriteContextPass;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class SessionsControllers extends Controller
{

    public function create(){
        return view('sessions.create');
    }

    public function store(){
        $attributes = request()->validate([
            'email' => ['required', Rule::exists('users', 'email')],
            'password' => 'required'
        ]);

            if(auth() -> attempt($attributes)){
                //segurança
                session()->regenerate();

                return redirect('/')->with('success', 'Welcome Back!');
            }
            
            throw ValidationException::withMessages(
                ['password' => 'Your credentials could not be verified!']
            );

    }


    public function destroy(){
        auth()->logout();

        return redirect('/')->with('success', "Goodbye!");
    }
}
