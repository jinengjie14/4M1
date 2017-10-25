<?php

namespace App\Http\Middleware;

use Closure;

class isAdmin
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
        if (! session('isAdmin') || is_null(session('isAdmin'))) {
            return redirect('/admin/login')->send();
        }
        return $next($request);
    }
}
