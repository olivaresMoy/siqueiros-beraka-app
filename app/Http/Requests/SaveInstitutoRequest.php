<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveInstitutoRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nombre' => 'required',
            'cct' => 'required',
            'zona' => 'required',
            'telefono' => 'required|regex:/[0-9]{10}/',
            'direccion' => 'required',
            'director' => 'required',
            'ciclo' => 'required|regex:/[0-9]{4}-[0-9]{4}/',
        ];
    }
}
