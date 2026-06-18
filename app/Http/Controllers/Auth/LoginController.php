<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginForm()
    {
        return view('Client.login');
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'correo' => ['required', 'email'],
            'contraseña' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            dd('ENTRO AL LOGIN CORRECTO');
            $request->session()->regenerate();
            return redirect()->intended('mainClient')->with('success', 'Inicio de sesión exitoso.');
        }

        return back()->withErrors([
            'correo' => 'The provided credentials do not match our records.',
        ])->onlyInput('correo');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
