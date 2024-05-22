<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Example
{ /**
  * Handle an incoming request.
  *
  * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
  */
    public function handle(Request $request, Closure $next): Response
    {
        $adminToken = '';
        if ($request->cookie('laravel_session') == $adminToken) {
            echo "You are an admin";
            return $next($request);
        }
        return abort(403, "You are not an admin");
    }
}

