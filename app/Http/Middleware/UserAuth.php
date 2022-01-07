<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //Verificando para que cuando le den /login y la sesion de un usuario ya existe, redireccione a la inicial home home no a la vista login
        if($request->path()=="login" && $request->session()->has('user')){
            return redirect('/');
        }
        return $next($request);
    }
}
