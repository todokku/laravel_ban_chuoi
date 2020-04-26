<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestProduct extends FormRequest
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
            'product_name' => 'required|unique:products,product_name,'.$this->id,
            'product_description' => 'required',
            'product_price' => 'required',
            'product_content' => 'required',
            'product_category_id' => 'required',
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
            'product_name.required' => 'Tên sản phẩm không được bỏ trống',
            'product_name.unique' => 'Tên sản phẩm đã tồn tại',
            'product_description.required' => 'Mô tả không được bỏ trống',
            'product_price.required' => 'Vui lòng nhập số tiền',
            'product_content.required' => 'Vui lòng nhập nội dung',
            'product_category_id.required' => 'Vui lòng chọn danh mục',
        ];
    }
}
