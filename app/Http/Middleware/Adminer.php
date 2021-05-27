<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Adminer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user()->rolse=="admin"){
            return $next($request);
        }
        abort(404);
        // admin|executive|staff|personnel
    }
}
