<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveUserRequest extends FormRequest
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
            'name' => 'required',
            'role_id' => 'required',
            'tutore_id' => 'exclude_unless:role_id,2|required',
            'grupo_id' => 'exclude_if:role_id,1,3,4|required',
            'nombre' => 'required',
            'apaterno' => 'required',
            'amaterno' => 'required',
            'email' => 'required',
            'celular' => 'required',
            'sexo' => 'required',
        ];
    }
}
