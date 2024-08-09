<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class StoreOrdersRequest extends FormRequest
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
            'taxRateId' => 'required|integer',
            "formData.emailaddress" => "required|email",
            'formData.phonenumber_shipping' => 'required|string|phone:CA,US',
            'formData.street_shipping' => 'required|string|min:5|max:255',
            'formData.zip_shipping' => 'required|string|regex:/^[A-Za-z]\d[A-Za-z] ?\d[A-Za-z]\d$/|min:6|max:7',
            'formData.state_shipping' => 'required|string|min:2|max:2',
            'formData.city_shipping' => 'required|string|max:255',
            'formData.street_billing' => 'nullable|string|min:5|max:255',
            'formData.zip_billing' => 'nullable|string|regex:/^[A-Za-z]\d[A-Za-z] ?\d[A-Za-z]\d$/|min:6|max:7',
            'formData.state_billing' => 'nullable|string|min:2|max:2',
            'formData.city_billing' => 'nullable|string|max:255',
            'formData.phonenumber_billing' => 'nullable|string|phone:CA,US',
        ];
    }

    /**
     * Get validation messages for inputs
     * @return string[]
     */
    public function messages()
    {
        return [
            'zip_shipping.regex' => 'The postal code must be a valid Canadian postal code.',
            'phonenumber_shipping' => 'The phone number is not valid North America phone number.',
            'phonenumber_billing' => 'The phone number is not valid North America phone number.'
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['errors' => $validator->errors()], 422));
    }
}
