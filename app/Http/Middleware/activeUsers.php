<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;
use Cache;
use Auth;
use Illuminate\Http\Request;

class activeUsers
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()){
          $expireTime = Carbon::now()->addMinutes(5);
          Cache::put('active-user' . Auth::user()->id, true, $expireTime);  
        }
        
        
        return $next($request);
    }
}
