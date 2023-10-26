<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }
    
    public function store(Request $request)
    {
       
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'max:50', 'email', 'unique:users'],
            'password' => ['required', 'string', 'min:5', 'max:50', 'confirmed'],
            'rules' => ['accepted'],
        ]);

        // $user = new User();
        // $user->name = $validated['name'];
        // $user->email = $validated['email'];
        // $user->password = $validated['password'];
        //$user->save();

        // $user = User::query()->create([
        //     'name' => $validated['name'],
        //     'email' => $validated['email'],
        //     'password' => $validated['password'],
        // ]);

        $user = User::query()->create($validated);
        
        return redirect()->route('user');
    }
}
