<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $guard = null): Response
    {

        if ($request->is('client*')) {
            if (Auth::guard('client')->check()) {
                return redirect('/client/dashboard');
            }
        } else if ($request->is('servicer*')) {
            if (Auth::guard('servicer')->check()) {
                return redirect('/servicer/dashboard');
            }
        }

        return $next($request);
    }
}