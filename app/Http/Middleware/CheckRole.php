<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            // Retrieve the authenticated user's role
            $userRole = Auth::user()->role;

            // Check if the user has the required role
            if ($userRole === $role) {
                return $next($request);
            } else {
                // Redirect or throw an unauthorized error
                abort(403, 'Unauthorized action.');
            }
        }

        // If the user is not authenticated, redirect to login
        return redirect()->route('login');
    }
}
