<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CorporationUpdateRequest extends FormRequest
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
            
                'profile_registrations_id' => 'required',
                'office' => 'required',
                'function' => 'required',
                'type_of_technology' => 'required|string|max:255',
                'company' => 'required|string|max:255',
                'modality' => 'required',
                'wage' => 'required',
            ];
    }
}
