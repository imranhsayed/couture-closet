<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOrderRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            // 'status' => 'required|string|in:Canceled,Delivered,Pending Delivery',
            // 'status' => 'required|in:Canceled,Delivered,Pending Delivery',
            'status' => 'required|integer|in:1,2,3,4',
        ];
    }

    public function messages()
    {
        return [
            'status.required' => 'The order status is required',
            'status.integer' => 'The order status must be a valid string',
            // 'status.in' => 'The selected order status is invalid',
        ];
    }
}
