<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');
        if ($credentials['username'] === 'magenta' && $credentials['password'] === 'rahasia') {
            return redirect()->route('dashboard');
        } else {
            return redirect()->back()->withErrors('Username atau password salah.');}
        }
    

        public function logout()
        {
            Auth::logout();
            return redirect()->route('login');
        }
        
}
