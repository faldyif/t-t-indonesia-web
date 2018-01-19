<?php

namespace App\Http\Middleware;

use Closure;

class HasGender
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
        if(! is_null($request->user()) && $request->user()->userType() == null) {
            return redirect(route('dashboard.user.gender'));
        }

        return $next($request);
    }
}
