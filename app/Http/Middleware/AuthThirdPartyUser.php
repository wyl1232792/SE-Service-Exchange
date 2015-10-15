<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class AuthThirdPartyUser
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
        if (Auth::guest() || Auth::user()->group == 3) {
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect('/');
            }
        }
        return $next($request);
    }
}
