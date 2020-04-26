<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestBanner extends FormRequest
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
             'banner_name' => 'required|unique:banner,banner_name,'.$this->id,
         ];
     }
 
     /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
     public function messages()
     {
         return [
             'banner_name.required' => 'Tiêu đề banner',
             'banner_name.unique' => 'Tiêu đề banner đã tồn tại',
         ];
     }
}
