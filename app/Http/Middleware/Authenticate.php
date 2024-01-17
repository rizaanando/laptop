<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Authenticate
{
    public function handle($request, Closure $next, ...$guards)
    {
        $allowedRoutes = ['register', 'restpasword', 'create', 'store', 'edit', 'update', 'destroy'];
        // Tambahkan rute CRUD yang diizinkan di sini

        if (in_array($request->route()->getName(), $allowedRoutes)) {
            return $next($request);
        }

        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                return $next($request);
            }
        }

        return redirect('login');
    }
}
