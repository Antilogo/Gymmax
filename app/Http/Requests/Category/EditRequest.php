<?php

namespace App\Http\Requests\Category;

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
            'category_name' => 'required|min:5'
        ];
    }
    public function messages()
    {
        return[
        'category_name.require' => 'Tên Sản Phẩm bắt buộc phải nhập',
        'category_name.min' => 'Tên Sản Phẩm bắt buộc phải nhập ít nhất trên 5 từ'
        ];
    }
}
