<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Gregwar\Captcha\CaptchaBuilder;
use Session;

class LoginController extends Controller
{
    /**
    *   后台登录页面
    */
    public function login()
    {
        return view('admin/login/login');
    }

    /**
    *   操作后台登录的方法
    */
    public function doLogin(Request $request)
    {
        // 获取用户名
        $username = $request->input('username');
        // 获取密码
        $password = $request->input('password');
        // 查询用户名
        $res = DB::table('meizu_user')->where('username',$username)->first();

        if(!$res) {

            return back()->with('error','用户名输入有误');
        }

        if($res->level != 1) {

             return back()->with('error','你的权限不足');            
        }

        // 密码的检测
        if(Hash::check($password,$res->password) ){

            // 把用户的id存入session
            session(['uid'=>$res->id]);
            $pic=$res->pic;
            //将用户名存入session
            Session::put('username',$username);
            //将图片存入session
            Session::put('pic',$pic);

            // 如果用户名和密码相同 跳转后台首页
            return redirect('/admin');
            
        } 

        return back()->with('error','密码输入有误');
    }

    /**
    *   退出登录
    */
    public function logout()
    {
        // 清空session数据
        session(['uid'=>null]);

        return redirect('/admin/login/login');
    }

    /**
    *   生成验证码的方法
    */
    public function vcode()
    {
        // 生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder;

        // 可以设置图片宽高及字体
        $builder->build($width = 100, $height = 40, $font = null);

        // 获取验证码的内容
        $phrase = $builder->getPhrase();

        // 把内容存入session
        Session::flash('vcode', $phrase);

        // 生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header('Content-Type: image/jpeg');
        $builder->output();
    }

    /**
    *   验证码的显示页面
    */
    public function getVcode()
    {
        return view('admin/login/vcode');
    }

    /**
    *   检测验证码是否存在session中
    */

    public function yzm()
    {
        var_dump(session('vcode'));
    }
    
}

