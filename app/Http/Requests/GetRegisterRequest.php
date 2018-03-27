<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Session;

class GetRegisterRequest extends Request
{
    /**
    * Determine if the user is authorized to make this request.
    *
    * @return bool
    */

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'username'=>array('regex:/^[a-zA-Z0-9]{6,16}$/','required','unique:meizu_user'),
            'password'=>array('required','regex:/^\w{6,12}$/'),
            // 'repassword1'=>'required|same:password',
            'email'=>'required|email|unique:meizu_user,email',
            'phone' => 'required|regex:/^1\d{10}$/',
            'vcode'=>"required",
        ];
    }

    public function messages()
    {
        return [
            'username.required' => '用户名不能为空',
            'username.unique' => '用户名已存在',
            'username.regex' => '用户名格式不正确',
            'password.required'  => '密码不能为空',
            'password.regex'  => '请输入8~12位数字',
            // 'repassword.required' => '确认密码不可为空',
            // 'repassword.same' => '两次密码不一致',
            'email.required' => '邮箱不可为空',
            'email.email' => '邮箱格式不正确',
            'email.unique' => '邮箱已经注册过了',
            'phone.required' => '手机号码不能为空',     
            'phone.regex' => '手机号码不正确', 
             'vcode.required' => '验证码不能为空',      
        ];
    }
}
