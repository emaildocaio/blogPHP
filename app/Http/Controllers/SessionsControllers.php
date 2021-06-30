<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsControllers extends Controller
{
    public function destroy(){
        auth()->logout();

        return redirect('/')->with('success', "Goodbye!");
    }
}
