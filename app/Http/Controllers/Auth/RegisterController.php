<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Models\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController
{
    public function index()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->role = 'C';

        $user->save();
        Auth::login($user);
        return redirect()->route('home.index');
    }
}