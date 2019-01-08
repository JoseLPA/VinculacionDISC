<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AprendizajeServicioUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_id' => 'required|integer',
            'cantidad_estudiantes' => 'required|integer',
            'nombre_socio' => 'required|regex:/^[a-zA-Z\s]+$/',
            'semestre' => 'required|in:1,2',
            'año' => 'required|integer',
            'asignatura_id' => 'required|integer',
        ];
    }
}