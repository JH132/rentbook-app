<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        // Pengecekan apakah admin telah login atau tidak
        if (auth()->check() && $this->isAdmin()) {
            return $next($request);
        }

        // Jika bukan admin atau belum login, arahkan ke halaman login
        return redirect()->route('login');
    }

    private function isAdmin()
    {
        // Daftar username admin yang valid
            $adminUsernames = ['shania', 'fathia', 'magenta', 'ruri'];

        // Pengecekan apakah username pengguna saat ini terdaftar sebagai admin
        return in_array(auth()->user()->username, $adminUsernames);
    }
}
