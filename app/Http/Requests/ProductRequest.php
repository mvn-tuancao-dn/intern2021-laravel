<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image' => 'required',
            'quantity' => 'required'
        ];
    }
    public function messages() 
    {
        return [
            'name.required' => 'Tên Sản phẩm không được để trống',
            'price.required' => 'Giá sản phẩn không được để trống',
            'description.required' => 'Mô tả sản phẩn không được để trống',
            'image.required' => 'Hình ảnh sản phẩn không được để trống',
            'quantity.required' => 'Số lượng sản phẩn không được để trống',
        ];
    }
}
