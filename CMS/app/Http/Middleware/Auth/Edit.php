<?php

namespace App\Http\Middleware\Auth;

use Closure;
use Black\Credentials\src\Http\Middleware\Auth\AbstractAuth;
class Edit
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
        return $next($request);
    }
}
