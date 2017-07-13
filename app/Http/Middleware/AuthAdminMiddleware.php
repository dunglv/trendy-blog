<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class AuthAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$role) // $role:string | ...$role:array
    {
        // dd($role);
        if (auth()->check() && auth()->user()->hasRole($role)) {
            return $next($request);
        }
        return redirect()->route('ui.user.login');
    }
}
