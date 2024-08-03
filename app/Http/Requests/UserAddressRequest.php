<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class UserAddressRequest extends FormRequest
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
            'street' => 'required|string|min:5|max:255',
            'postal_code' => 'required|string|regex:/^[A-Za-z]\d[A-Za-z] ?\d[A-Za-z]\d$/|min:6|max:7',
            'province' => 'required|string|min:2|max:2',
            'city' => 'required|string|max:255',
            'country' => 'required|string|max:255'
        ];
    }

    /**
     * customize the validation messages
     * @return string[]
     */
    public function messages(): array
    {
        return [
            'postal_code.regex' => 'The postal code must be a valid Canadian postal code.'
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['errors' => $validator->errors()], 422));
    }
}
