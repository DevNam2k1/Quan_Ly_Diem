<?php

namespace App\Http\Middleware;


use Auth;
use Closure;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

class AccessPermission
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
      

        $actions =  Route::getCurrentRoute()->getAction();

        $roles = isset($actions['roles']) ? $actions['roles'] : null;
        if(Auth::user()){
          if(Auth::user()->hasAnyRoles($roles)){
            return $next($request);
        }else{
          return abort(401);   
        }
       } else{
        return abort(401);  
       }
    
   }

}