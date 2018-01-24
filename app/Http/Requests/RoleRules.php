<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class RoleRules extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;  // 把他设为true
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules( Request $request ) // 设置字段验证规则
    {
        if ($request->isMethod('PUT') || $request->isMethod('PATCH')) {
            return [
                'name' => 'required',
                'display_name' => 'required',
                'description' => 'required',
            ];           
        }
        return [
        'name' => 'required|unique:roles,name',
        'display_name' => 'required',
        'description' => 'required',
        ];

    }
}
