<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class AuthUser
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
        if(Auth::check()){
            if(Auth::user()->role == 2){
                return $next($request);
            }else{
                return redirect('dashboard');
            }
        }
        return redirect('login');
    }
}
