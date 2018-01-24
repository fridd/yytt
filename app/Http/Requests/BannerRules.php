<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BannerRules extends FormRequest
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
            'title'=>'required|max:170',
            'digest' => 'required|max:200',
            'content' => 'required',
            'seo_title' => 'required|max:170',
            'seo_key' => 'required|max:170',
            'seo_description' => 'required|max:255',
            'status' => 'required', 
            'user_id' => 'required',           
        ];
    }
}
