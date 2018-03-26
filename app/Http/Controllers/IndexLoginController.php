<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;

class IndexLoginController extends Controller
{
    /**
    *   前台登录
    */

    public function gologin()
    {
        return view('index/index/gologin');
    }

    /**
    *   登录的操作
    */

     public function doGologin(Request $request)
    { 

        // echo 1234;die;
        // 获取用户名
         $username = $request->input('username');
         // 获取密码
         $password = $request->input('password');
         // 查询用户名
         $resaa = DB::table('meizu_user')->where('username',$username)->where('status','1')->first();

        if(!$resaa) {

             return back()->with('error','用户名输入有误');
         }

        

         // 密码的检测
        if(Hash::check($password,$resaa->password) ){

            // 把用户的id存入session
            session(['uid'=>$resaa->id,'username'=>$resaa->username]);
           
            
             // 如果用户名和密码相同 跳转后台首页
             return redirect('/index');
            
         } 

         return back()->with('error','密码输入有误');
   
     }

    // 前台退出
    public function indexLogout()
    {
        // 清空session数据
        session(['uid'=>null,'username'=>null]);

        return redirect('/index');
    }
}
