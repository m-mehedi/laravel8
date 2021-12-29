<?php

namespace App\Http\Middleware;

use Closure;
<<<<<<< HEAD
use Illuminate\Http\Request;
use Auth;

=======
use Auth;

use Illuminate\Http\Request;

>>>>>>> 2e9c176ebb48651c2e54aec67e8dfda3662078a9
class AccessAdmin
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
<<<<<<< HEAD
        if(Auth::user()->hasAnyRole('admin')){
=======
        if(Auth::user()->hasAnyRoles(['admin','author'])){
>>>>>>> 2e9c176ebb48651c2e54aec67e8dfda3662078a9
            return $next($request);
        }
        return redirect('dashboard');
    }
}
