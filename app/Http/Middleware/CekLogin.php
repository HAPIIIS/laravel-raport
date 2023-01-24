<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CekLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        // if (!Auth::check()) {
        //     return redirect('login');
        // }
        // if(in_array($request->user()->role, $roles)){
        //     return $next($request);
        // }
        if (in_array(auth()->user()->role, $roles)) {
            return $next($request);
        }

        if (Auth::user()->role == 'admin'){
            return redirect(url('/admin/dashboard'));
            
        }elseif(Auth::user()->role =='siswa'){
            return redirect(url('/siswa/dashboard'));
        }    

        dd($roles);
        return redirect('login')->with('error',"kamu gak punya akses");
    }
}
