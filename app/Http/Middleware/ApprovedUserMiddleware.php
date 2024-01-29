<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class ApprovedUserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
          // Check if the user is authenticated
          if (Auth::check()) {
            // Check if the user is approved (is_approved column is 1)
            if (Auth::user()->is_approved == 1) {
                return $next($request);
            } else {
                Auth::logout();
                // Redirect or respond with an error for unapproved users
                return redirect()->route('login'); // Change 'unapproved' to the route or action you want to redirect to
            }
        }
        Auth::logout();

        // Redirect to the login page if the user is not authenticated
        return redirect()->route('login'); // Change 'login' to the route or action for your login page
    }
}
