<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use App\User;

class RolesMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $roleId)
    {
        if (! Auth::check()) {
            return redirect()->route('login');
        }

        $user = Auth::user();
        if ($user->isSuperAdmin()) {
            return $next($request);
        }

        if ($user->role_id == $roleId) {
            return $next($request);
        }

        return abort(403);
    }
}
