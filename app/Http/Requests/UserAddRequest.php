<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserAddRequest extends Request
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'required',
            'password' => 'required',
            'repassword'=>'required | same:password',
            'email'=>'required|regex:/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/',
            'phone'=>'required|regex:/^1\d{10}$/',
          
            
        ];
    }

     public function messages()
    {
        return [
        'username.required'=>'用户名不能为空',
            'password.required'=>'密码不能为空',
            'repassword.required' =>'确认密码不能为空',
            'repassword.same'=>'两次密码不一致',
            'email.required'=>'邮箱不能为为空',
            'email.regex'=>'邮箱格式不正确',
            'phone.required'=>'手机号不能为空',
            'phone.regex'=>'手机号格式不正确',
        
        
        ];
    }
}
