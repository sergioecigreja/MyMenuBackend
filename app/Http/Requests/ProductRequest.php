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

        if ($this->isMethod('put')) {
            return [
                'product_name' => 'string|max:255',
                'product_description' => 'nullable|string',
                'product_price' => 'numeric',
                'menu_id' => 'exists:menus,menu_id'
            ];
        }

        return [
            'product_name' => 'required|string|max:255',
            'product_description' => 'nullable|string',
            'product_price' => 'required|numeric',
            'menu_id' => 'required|exists:menus,menu_id'
        ];
    }
}
