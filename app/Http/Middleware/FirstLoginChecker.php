<?php

namespace App\Http\Middleware;

use Closure;

class FirstLoginChecker
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
        if(! is_null($request->user()) && ! $request->user()->first_login) {
            return redirect('/dashboard/welcome');
        }

        return $next($request);
    }
}
