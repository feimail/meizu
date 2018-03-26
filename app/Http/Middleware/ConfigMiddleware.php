<?php

namespace App\Http\Middleware;

use Closure;
use DB;
class ConfigMiddleware
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
        //判断session里面有没有用户uconfig  检测如果没有 如果没有访问其他方法不允许
        // var_dump(session('uconfig'));die;
         $res =  DB::table('meizu_webconf')->first();

          session(['uconfig'=>$res->status]);
           if(session('uconfig') !='1') {
            return view('homes/index');
        } else {
            
            return $next($request);

        }
    }
}
