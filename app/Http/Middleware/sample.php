<?php

namespace App\Http\Middleware;

use Closure;

class sample
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
        if($request->input('age')<9){
            return redirect('login');
        }
        else{
        //echo "This is my first middleware";
        return $next($request);
        }
    }
}
