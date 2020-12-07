<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ClientMiddleware
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
        if ($this->auth->user()->isRestaurantClient()) {
            return $next($request);
        }

        return response()->json(['message' => 'Unauthorized'], 401);
    }
}
