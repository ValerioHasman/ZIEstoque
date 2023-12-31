<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckEmail
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!auth()->check()){
            return redirect(route('login.formulario'));
        }

        $email = auth()->user()->email;
        $dados = explode('@', $email);
        $servidorEmail = $dados[1];

        if($servidorEmail != 'gmail.com'){
            return redirect(route('login.formulario'));
        }


        return $next($request);
    }
}
