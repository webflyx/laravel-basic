<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        //dd(session()->all());
        return view('login.index');
    }
    
    public function store()
    {
        
        alert(__('Welcome to your account.'));


        //return redirect()->route('user');
        return redirect()->back()->withInput();
    }
}
