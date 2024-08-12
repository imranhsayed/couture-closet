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
            'formData.fullname' => 'required|string|min:5|max:255',
            'formData.emailaddress' => 'required|email',
            'formData.phonenumber_shipping' => 'nullable|string|phone:CA,US',
            'formData.street_shipping' => 'nullable|string|min:5|max:255',
            'formData.zip_shipping' => 'nullable|string|regex:/^[A-Za-z]\d[A-Za-z] ?\d[A-Za-z]\d$/|min:6|max:7',
            'formData.state_shipping' => 'nullable|string|min:2|max:2',
            'formData.city_shipping' => 'nullable|string|max:255',
            'formData.street_billing' => 'required|string|min:5|max:255',
            'formData.zip_billing' => 'required|string|regex:/^[A-Za-z]\d[A-Za-z] ?\d[A-Za-z]\d$/|min:6|max:7',
            'formData.state_billing' => 'required|string|min:2|max:2',
            'formData.city_billing' => 'required|string|max:255',
            'formData.phonenumber_billing' => 'required|string|phone:CA,US',
            'formData.card_name' => 'required|string|min:5|max:255',
            'formData.card_number' => 'required|string|regex:/^\d{15,16}$/',
            'formData.card_type' => 'required|string',
            'formData.expiry_date' => 'required|integer|digits:4',
            'formData.cvv' => 'required|digits:3'
        ];
    }

    /**
     * Get validation messages for inputs
     * @return string[]
     */
    public function messages()
    {
        return [
            'required' => 'The :attribute field is required.',
            'email' => 'The :attribute must be a valid email address.',
            'max' => 'The :attribute may not be greater than :max characters.',
            'min' => 'The :attribute must be at least :min characters.',
            'unique' => 'The :attribute has already been taken.',
            'confirmed' => 'The :attribute confirmation does not match.',
            'formData.zip_shipping.regex' => 'The :attribute must be a valid Canadian postal code.',
            'formData.zip_billing.regex' => 'The :attribute must be a valid Canadian postal code.',
            'formData.phonenumber_shipping' => 'The :attribute is not valid North America phone number.',
            'formData.phonenumber_billing' => 'The :attribute is not valid North America phone number.'
        ];
    }

    /**
     * Set attributes for different input error
     * @return string[]
     */
    public function attributes()
    {
        return [
            'formData.fullname' => 'full name',
            'formData.emailaddress' => 'email address',
            'formData.phonenumber_shipping' => 'shipping phone number',
            'formData.street_shipping' => 'shipping street',
            'formData.zip_shipping' => 'shipping zip code',
            'formData.state_shipping' => 'shipping state',
            'formData.city_shipping' => 'shipping city',
            'formData.street_billing' => 'billing street',
            'formData.zip_billing' => 'billing zip code',
            'formData.state_billing' => 'billing state',
            'formData.city_billing' => 'billing city',
            'formData.phonenumber_billing' => 'billing phone number',
            'formData.card_name' => 'card name',
            'formData.card_number' => 'card number',
            'formData.card_type' => 'card type',
            'formData.expiry_date' => 'expiry date',
            'formData.cvv' => 'cvv'
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['errors' => $validator->errors()], 422));
    }
}
