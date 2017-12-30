<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest',['except'=>'destroy']);
    }

    

    public function login()
    {
        return view ('users.login');
    }

    public function store()
    {
        if(auth()->attempt(request(['email','password']))){

            return back();
        };

        return redirect('posts/create');
    }

    public function getlogin()
    {
        return view('user.home');
    }

    public function destroy()
    {
        auth()->logout();
        
        return redirect()->home();
    }
}
