<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestPost extends FormRequest
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
            'post_name' => 'required|unique:posts,post_name,'.$this->id,
            'post_description' => 'required',
            'post_content' => 'required'
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
            'post_name.required' => 'Tên bài viết không được bỏ trống',
            'post_name.unique' => 'Tên bài viết đã tồn tại',
            'post_description.required' => 'Vui lòng nhập mô tả ngắn',
            'post_content.required' => 'Vui lòng nhập nội dung',
        ];
    }
}
