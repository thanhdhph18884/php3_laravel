<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckAdmin
{
    public function handle(Request $request, Closure $next)
    {
        $val = Auth::user()->role;
        if ($val == 0) {
            return redirect('/dashboard');
        }
        return $next($request);
    }
}
