<?php

namespace App\Http\Middleware;

use Closure;

class LoginMiddleware
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
        //判断session里面有没有用户uid  检测如果没有用户id 如果没有访问其他方法不允许
        if(!session('uid')) {

            return redirect('admin/login/login');
        } else {
            
            return $next($request);

        }
    }
}
