<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Hash;
use App\Http\Controllers\Controller;
use App\Http\Requests\GetRegisterRequest;


class RegisterController extends Controller
{	
	/**
	*	前台注册
	*/
    public function register()
    {
        return view('/index/index/register');
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
    *	处理前台注册数据
    */
    public function doRegister(GetRegisterRequest $request)
    {   
        // $a  =$request->all();
        // var_dump($a);die;
    	// 获取数据
    	$res = $request->only('username','email','phone');

        if(session('vcode') != $request->input('vcode')){

            return back()->with('error','验证码有误!');


        }

        // var_dump(session('vcode'));
        // var_dump($request->input('vcode'));die;
    	// 对密码加密
    	$res['password'] = Hash::make($request->input('password'));
    	// 状态
    	$res['status'] = '0';
         // dd($res);
        $res['pic'] ="/uploads/userpic/1.jpg";
    	$row = DB::table('meizu_user')->insert($res);
         // var_dump($row);die;
    	// 判断
    	if($row){
    		return redirect('/index/gologin');
    	} else{
    		return back()->with('error','注册失败');
    	}
    }
	
	 /**
    *   用户填写邮箱页面
    */

    public function forget()
    {
        return view('emails/forget');
    }

    /**
    *   处理邮箱的数据
    */
    public function doForget(Request $request)
    {

        $email = $request->input('email');

        // 判断
        $res = DB::table('meizu_user')->where('email',$email)->first();
        // $id=$res->id;
        // var_dump($id);die;
        // dd($res);

        if(empty($res)) {

            dd('注册邮箱不存在');

        }

        \Mail::send('emails.yanzheng', ['id'=>$res->id], function ($m) use ($res) {
           $m->from('zk1824@sina.com', '魅族商城');

           $m->to($res->email,$res->username)->subject('魅族商城---修改密码');
        });

        // 提示成功的信息

            return view('emails/youxiang');
            

    }


    /**
    *   重置密码
    */

    public  function find(Request $request)
    {
		
        $id = $request->input('id');

        return view('emails.findform',['row'=>$id]);
    }

    /**
    *   操作重置密码
    */

    public function update(Request $request)
    {
        // 检测


        // 获取id
        $id = $request->input('id');

        // 获取密码
        $password['password'] = Hash::make($request->input('password'));

        $res = DB::table('meizu_user')->where('id',$id)->update($password);

        if($res) {

            return redirect('/index/gologin')->with('success','重置成功');

        }else {

            return back()->with('error','重置失败');

        }
    }
}
