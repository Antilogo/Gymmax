<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class EditRequest extends FormRequest
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
            'product_name' => 'required|min:5',
            'product_price' => 'required',
            'product_des' => 'required',
            'product_quantity' => 'required',
            'product_img' => 'required'
        ];
    }
    public function messages()
    {
        return[
        'product_name.require' => 'Tên Sản Phẩm bắt buộc phải nhập',
        'product_name.min' => 'Tên Sản Phẩm bắt buộc phải nhập ít nhất trên 5 từ',
        'product_price.require' => 'Giá Sản Phẩm bắt buộc phải nhập',
        'product_des.require' => 'Mô Tả Sản Phẩm bắt buộc phải nhập',
        'product_quantity.require' => 'Số Lượng Sản Phẩm bắt buộc phải nhập',
        'product_img.require' => 'Ảnh Sản Phẩm bắt buộc phải nhập'
        ];
    }
}
