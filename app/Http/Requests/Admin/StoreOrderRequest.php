<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'user_id' => 'required|exists:users,id',
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            'size' => 'required|string',
            'provincial_tax_rate_id' => 'required|exists:provincial_tax_rates,id',
            'email' => 'required|email',
            'shipping_address' => 'required|string',
            'billing_address' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'user_id.required' => 'A User ID is required',
            'user_id.exists' => 'No User with that ID was found',
            'product_id.required' => 'Product selection is required',
            'product_id.exists' => 'Selected product does not exist',
            'quantity.required' => 'Quantity is required',
            'quantity.integer' => 'Quantity must be a number',
            'quantity.min' => 'Quantity must be at least 1',
            'size.required' => 'Size selection is required',
            'provincial_tax_rate_id.required' => 'Tax Selection is required',
        ];
    }
}
