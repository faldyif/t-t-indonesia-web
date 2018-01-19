<?php

namespace App\Http\Middleware;

use Closure;

class IsCalon
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
        if(! is_null($request->user()) && $request->user()->userType() == 'admin') {
            return redirect('/admin');
        }

        return $next($request);
    }
}
