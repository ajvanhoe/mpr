<?php

namespace App\Http\Middleware;

use Closure;
use App\User;

use Auth;

class VerifiedUser
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
        if(Auth::user()->verified == User::VERIFIED_USER){
               return $next($request);

        }

            return redirect('/');
       
    }
}
