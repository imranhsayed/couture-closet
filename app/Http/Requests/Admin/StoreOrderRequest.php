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
            'billing_phone_number' => 'required|string|regex:/^[0-9\s\-\+\(\)]{10,}$/|min:10|max:18',
            'shipping_phone_number' => 'required|string|regex:/^[0-9\s\-\+\(\)]{10,}$/|min:10|max:18',
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
            'email.required' => 'Email is required',
            'email.email' => 'Email must be a valid email address',
            'shipping_address.required' => 'Shipping address is required',
            'billing_address.required' => 'Billing address is required',
            'billing_phone_number.required' => 'Billing phone number is required',
            'billing_phone_number.regex' => 'Billing phone number must be a valid phone number',
            'billing_phone_number.min' => 'Billing phone number must be at least 10 characters',
            'billing_phone_number.max' => 'Billing phone number must be at most 18 characters',
            'shipping_phone_number.required' => 'Shipping phone number is required',
            'shipping_phone_number.regex' => 'Shipping phone number must be a valid phone number',
            'shipping_phone_number.min' => 'Shipping phone number must be at least 10 characters',
            'shipping_phone_number.max' => 'Shipping phone number must be at most 18 characters',
        ];
    }
}
