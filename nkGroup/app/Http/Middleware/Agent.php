<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;

class Agent
{
   
    public function handle(Request $request, Closure $next)
    {
        if(!Auth::guard('agent')->check()){
            //return "agay login kor";
            return redirect('/login/agent');
        }
        return $next($request);
    }
}
