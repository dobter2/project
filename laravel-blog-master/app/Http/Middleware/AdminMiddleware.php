<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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
        if (! Auth::user()->is_admin) {
            if ($request->expectsJson()) {
                return response()->json(['error' => 'Вы не админ'], 401);
            }

            abort(403, "Вы не админ.");
        }

        return $next($request);
    }
}
