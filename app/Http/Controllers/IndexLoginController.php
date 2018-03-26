<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;
use App\Model\User;
use App\Http\Requests\LoginPost;

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

     public function doGologin(LoginPost $request)
    { 
        $data = $request->only('username','password');
        $where = ['username'=>$data['username'], 'status'=>1];
        // 查询用户名
        // $res = DB::table('meizu_user')->where('username',$username)->where('status','1')->first();
        $res = User::where($where)->first();
        // dd($res);
        //判断用户是否存在
        if(!$res) return back()->with('error','用户不存在');
        // 加密密码的检测
        if(!Hash::check($data['password'],$res->password)) return back()->with(['error'=>'密码输入有误']);
        //不加密密码检测判断
        // if($data['password'] != $res['password']) return back()->with('error','密码输入有误');
        // 把用户的id存入session
        session(['uid'=>$res->id,'username'=>$res->username]);
        // 如果用户名和密码相同 跳转后台首页
        return redirect('/index');
     }

    // 前台退出
    public function indexLogout()
    {
        // 清空session数据
        session(['uid'=>null,'username'=>null]);
        return redirect('/index');
    }
}
