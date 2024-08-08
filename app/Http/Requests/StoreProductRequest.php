<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "sku" => "required|string|min:10|max:50",
            "name" => "required|string|min:10|max:100",
            "price" => "required|numeric|",
            "stock_quantity" => 'required|integer',
            'images' => 'required|array|min:1|max:3',
            "images.*" => 'required|image|mimes:jpeg,png,jpg,svg',
            'categories' => 'required|array|min:1',
            "categories.*" => "required|integer",
            "description" => "required|string|min:10|max:255"
        ];
    }

    /**
     * set validation messages for specific field
     * @return string[]
     */
    public function messages()
    {
        return [
            "images.mimes" => "Only support jpeg, png, jpg, svg images"
        ];
    }
}
