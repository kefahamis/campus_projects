<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if (!Auth::check()) {
            return redirect()->route('login');
        }
        if (Auth::user()->role_id == 3) {
            return redirect()->route('worker');
        }
        if (Auth::user()->role_id == 2) {
            return redirect()->route('employer');
        }
        if (Auth::user()->role_id == 1) {
            return $next($request);
        }
    }
}
