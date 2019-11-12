<?php

namespace App\Http\Middleware;

use App\Models\Admin;
use Closure;

class AdminLoginAuth
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
        if($request->session()->has('is_login')){
            $admin = Admin::query()->find(session('admin_id'));


            return $next($request);
        }else{
            return redirect()->route('login.login');
        }
    }
}
