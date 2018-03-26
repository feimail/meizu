<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PasswordResets extends Request
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
            'password' => array('regex:/^[a-zA-Z0-9]{6,16}$/','required'),
            'repassword' => 'required ',
        ];
    }

     public function messages()
    {
        return [
            'password.required'   => '密码不能为空',
            'password.regex'      => '请填写6-16为字母数字，区分大小写',
            // 'repassword.required' => '确认密码不能为空',
            // 'repassword.same'     => '两次密码不一样',
        ];
    }
}
