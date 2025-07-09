<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
        'fullname'      => 'required|string|max:255',
        'dob'            => 'required|date|before:today',
        'gender'         => 'required|in:male,female',
        'phone_number'   => 'required|regex:/^01[0-9]{9}$/',
        'address'        => 'nullable|string|max:500',
        'marital_status' => 'nullable|in:single,married,divorced,widowed',
        'work'           => 'nullable|string|max:255',
        'talents'        => 'nullable|string|max:1000',
        'service_type'   => 'required|string',
        'is_deacon'      => 'nullable|boolean',
        'photo'          => 'nullable|image|mimes:jpg,jpeg,png|max:2048',

        ];
    }
}
