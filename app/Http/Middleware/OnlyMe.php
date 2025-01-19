<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OnlyMe
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(auth()->check()) 
        {
            if(auth()->user()->email == 'aaa@a.com') {
                // Allow the Request to proceed
                return $next($request);
            }

            return response(["message" => "Access is not proper!"], 403);
        }

        return redirect('/login');
    }
}
