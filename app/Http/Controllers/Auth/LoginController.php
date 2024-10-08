<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $messages = [
            'email.required' => 'El correo electrónico es obligatorio.',
            'email.email' => 'El correo electrónico no es válido.',
            'password.required' => 'La contraseña es obligatoria.',
        ];

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ], $messages);

        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            $user = Auth::user();

            if($user->role == 'A')
            {   
                //Cambiar por admin.index
                return redirect()->route('admin.product');
            }
            else
            {
                return redirect()->route('home.index');
            }
        }

        return back()->withErrors([
            'email' => 'Las credenciales no coinciden con nuestros registros.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}