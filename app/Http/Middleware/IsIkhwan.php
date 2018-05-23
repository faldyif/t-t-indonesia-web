<?php

namespace App\Http\Middleware;

use Closure;

class IsIkhwan
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
        if($request->user()->userType() != 'ikhwan') {
            return redirect('/home');
        }

        return $next($request);
    }
}
