<?php

namespace App\Http\Requests\Product;

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
            'thumb' => 'required',
            'quantity' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required ' => 'Ten san pham khong duoc de trong vui long nhap lai',
            'thumb.required' => 'Anh san pham khong duoc de trong vui long them anh san pham',
            'quantity.required' => 'So luong khong duoc de trong va phai > 0'
        ];
    }
}
