<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class isLogin
{

    public function handle(Request $request, Closure $next)
    {
        if(auth()->check())
        {
            return redirect('/dashboard');
        }
        return $next($request);
    }
}
