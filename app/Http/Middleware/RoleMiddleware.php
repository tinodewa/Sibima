<?php

namespace App\Http\Middleware;

use Auth;
use App\Role;
use Closure;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::user()->isSuperAdmin())
            return $next($request);

        if ($guard === 'Admin 1') {
            if (Auth::user()->role->name === $guard) {
                abort(403);
            }
        }

        if ($guard === 'Admin 2') {
            if (Auth::user()->role->name === $guard) {
                abort(403);
            }
        }

        return $next($request);
    }
}
