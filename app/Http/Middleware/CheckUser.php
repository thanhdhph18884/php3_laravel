<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckUser
{
    public function handle(Request $request, Closure $next)
    {
        $val = Auth::user()->role;
        if ($val == 1) {
            return redirect('/');
        }
        return $next($request);
    }
}
