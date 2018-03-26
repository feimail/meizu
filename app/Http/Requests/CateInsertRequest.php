<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CateInsertRequest extends Request
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
            'name' => 'required|unique:meizu_cate',
            'pid'=>'required|regex:/^\d+$/',
        ];
    }

     public function messages()
    {
        return [
        'name.required'=>'分类名不能为空',
        'name.unique'=>'分类名已存在',
        'pid.required'=>'父级分类不能为空',
        'pid.regex'=>'分类名格式不正确',
        ];
    }
}
