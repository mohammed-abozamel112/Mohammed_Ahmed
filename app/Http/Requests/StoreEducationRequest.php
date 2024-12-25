<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEducationRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'field' => 'required|string|max:100',
            'start_date' => 'required|date|Y-m',
            'end_date' => 'required|date|إY-m',
            'grade' => 'required|float|max:4',
            'location' => 'required|string|max:100',
            'since' => 'required|date|Y',
            'status' => 'required|string',
        ];
    }
}