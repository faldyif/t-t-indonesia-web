<?php

namespace App\Http\Middleware;

use Closure;

class IsAkhwat
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
        if(! is_null($request->user()) && ! $request->user()->userType() == 'akhwat') {
            return redirect('/home');
        }

        return $next($request);
    }
}
