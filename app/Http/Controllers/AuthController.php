<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function showLoginForm()
    {
        return view('Auth.login');
    }

    public function login(Request $request) {
    // dd($request);

        $credential = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        // dd($credential);
        // dd(Auth::guard('utilisateurs')->attempt($credential));

        if(Auth::guard('utilisateurs')->attempt($credential)) {
            $request->session()->regenerate();
            return redirect()->intended('home');
        } else {
            return back()->withErrors([
                'email' => 'Invalid credentials.',
            ]);
        }
    }

    public function logout(Request $request)
    {
        Auth::guard('utilisateurs')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
