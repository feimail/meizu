<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ConfigUpdateRequest extends Request
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
            // 'headlogo' => 'required',
            'title' => 'required',
            'description' => 'required',
            'copyright' => 'required',
            'registerid' => 'required',
            'allow' => 'required',
            'number' => 'required',
          
            
        ];
    }

     public function messages()
    {
        return [
        // 'headlogo.required'=>'logo名不能为空',
        'title.required'=>'网站标题名不能为空',
        'description.required'=>'网站描述不能为空',
        'copyright.required'=>'网站版权不能为空',
        'registerid.required'=>'注册号不能为空',
        'allow.required'=>'经营许可证号不能为空',
        'number.required'=>'ICP备案号不能为空',
        
        
        ];
    }
}
