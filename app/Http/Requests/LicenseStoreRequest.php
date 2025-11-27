<?php

namespace App\Http\Requests;

use App\Models\License;
use Illuminate\Foundation\Http\FormRequest;

class LicenseStoreRequest extends FormRequest
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
            'license_number' => ['required', 'string', 'unique:'.License::class],
            'name' => ['required', 'string', 'max:255'],
            'nrc_number' => ['required', 'string', 'max:255'],
            'date_of_birth' => ['required', 'date'],
            'blood_type' => ['nullable', 'string', 'max:3'],
            'expiry_date' => ['required', 'date'],
            'license_type' => ['required', 'string', 'max:10'],
            'address' => ['nullable', 'string'],
            'photo' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
        ];
    }
}
