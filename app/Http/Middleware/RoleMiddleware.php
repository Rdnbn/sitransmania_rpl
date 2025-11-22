<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
   public function handle($request, Closure $next, $role)
{
    if (!auth()->check()) {
        return redirect('/login');
    }

    if (auth()->user()->role !== $role) {
        return redirect()->route('landing');
    }

    return $next($request);
}

}
