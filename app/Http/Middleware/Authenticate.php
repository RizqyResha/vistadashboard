<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request)
    {
        $uri = $request->path();

        if ($request->is('client*')) {
            if (Auth::guard('client')->check()) {
                return redirect('/client/dashboard');
            }
        } else if ($request->is('admin*')) {
            if (Auth::guard('admin')->check()) {
                return redirect('/admin/dashboard');
            }
        }
    }
}