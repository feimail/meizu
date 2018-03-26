<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Hash;
use App\Http\Controllers\Controller;
use App\Http\Requests\GetRegisterRequest;
use App\Model\User;
use App\Model\PasswordResets;
use App\Http\Requests\PasswordResets as PasswordResetsRequest;


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
        //检测验证码是否正确 防止恶意注册
        if(session('vcode') != $request->input('vcode')) return back()->with('error','验证码有误!');
        // 获取数据
        $data = $request->only('username','email','phone');
        // 对密码加密
        $data['password'] = Hash::make($request->only('password')['password']);
        //密码不加密
        // $data['password'] = $request->only('password')['password'];
        // 状态
        $data['status'] = '1';
        $data['pic'] ="/uploads/userpic/1.jpg";
        // $row = DB::table('meizu_user')->insert($res);
        $row = User::insert($data);
        // 判断
        if(!$row) return back()->with('error','注册失败');
        return redirect('/index/gologin');
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
        // $res = DB::table('meizu_user')->where('email',$email)->first();
        $res = User::where('email',$email)->first();
        if(empty($res)) return back()->with('error','邮箱不存在！');
        //生成token
        $time = time();
        $rand = rand(1000000000,$time);
        $token = md5($rand.$email.$time);
        // dd($token.$email);
        //开启事务
        \DB::beginTransaction();
        //写入数据库
        $datatime = date("Y-m-d H:i:s",time());
        $data = ['username'=>$res['username'],'token'=>$token, 'created_at'=>$datatime];
        // dd($data);
        $resOne = PasswordResets::insert($data);
        if(!$resOne)  {
            \DB::rollBack(); 
            return back()->with('error','1邮件发送失败!');die;
        }
        //发送邮件
        $resTwo = \Mail::send('emails.yanzheng', ['token'=>$token], function ($m) use ($res) {
                       $m->from('zheye@lnmp.space', '魅族商城');
                       $m->to($res['email'],$res['username'])->subject('修改密码');
                    });
        if(!$resTwo){
            \DB::rollBack();
            return back()->with('error','2邮件发送失败!');die;
        }
        //发送成功
        \DB::commit();
        // 提示成功的信息
        return view('emails/youxiang');
            

    }


    /**
    *   重置密码
    */

    public  function resets(Request $request,$token)
    {
	

        return view('emails.findform',['token'=>$token]);
    }

    /**
    *   操作重置密码
    */

    public function update(PasswordResetsRequest $request)
    {
        // 检测
        $where= $request->only('token');
        $res = PasswordResets::where($where)->orderBy('created_at','desc')->first();
        // dd($res);
        if(!$res) return redirect('/index/forget')->withError('违规操作！');
        $timeNow = time();
        $timeEnd = strtotime($res['created_at'])+3600;
        if($timeNow > $timeEnd) return redirect('/index/forget')->withError('连接过期，请重新发送邮件！');
        //修改密码
        //获取修改密码用户信息
        $resOne = PasswordResets::where($where)->first();
        //获取密码
        $password = Hash::make($request->only('password')['password']);
        $data = ['password'=>$password];
        $resTwo = User::where('username',$resOne['username'])->update($data);
        if(!$resTwo) return back()->with('error','修改密码失败，请重新尝试');
        PasswordResets::where($where)->delete();
        return redirect('/index/gologin')->with('error','重置成功');
        
    }
}
