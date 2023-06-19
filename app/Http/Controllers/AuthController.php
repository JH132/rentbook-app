<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');
        if ($credentials['username'] === 'admin' && $credentials['password'] === 'password') {
            return redirect()->route('dashboard');
        } else {
            return redirect()->back()->withErrors('Username atau password salah.');}
        }


}
