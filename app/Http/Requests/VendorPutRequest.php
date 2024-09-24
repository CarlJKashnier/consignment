<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VendorPutRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'company_name' => 'required|string|max:255',
            'dba_name' => 'required|string|max:255',
            'primary_contact_name' => 'required|string|max:255',
            'address_of_record' => 'required|string|max:255',
            'address2_of_record' => 'string|max:255',
            'city_of_record' => 'required|string|max:50',
            'state_of_record' => 'required|string|max:50',
            'zip_of_record' => 'required|string|max:10',
            'consignment_percentage' => 'required|float|max:3',
        ];
    }

    public function messages()
    {
        return [
            'company_name.required' => 'A Company Name is required.',
            'dba_name.required' => 'A BDA Name is required.',
            'primary_contact_name.required' => 'A Primary Contact is required.',
            'address_of_record.required' => 'An Address is required.',
            'city_of_record.required' => 'A City is required.',
            'state_of_record.required' => 'A State is required.',
            'zip_of_record.required' => 'A Zip Code is required.',
            'consignment_percentage.required' => 'A Consignment Percentage is required.',
        ];
    }
}
