<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Response;

class EmployerMiddleware
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
        if ($request->user() && $request->user()->type != 'employer')
        {
            return new Response(view('unauthorized')->with('role', 'EMPLOYER'));
        }
        return $next($request);
    }
}
