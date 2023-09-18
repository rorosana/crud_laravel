<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TareaRequest extends FormRequest
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
        'nombre' => 'required|max:60',
        'descripcion' => 'nullable|max:255',
        'finalizada' => 'nullable|numeric|min:0|max:1',
        'urgencia' => 'required|numeric|min:0|max:2',
        'fecha_limite' => 'required|date_format:Y-m-d\TH:i'
        ];
    }

}

