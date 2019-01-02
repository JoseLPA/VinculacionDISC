<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TituladoUpdateRequest extends FormRequest
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

            'nombre_titulado' => 'required|regex:/^[a-zA-Z\s]+$/',
            'rut_titulado' => 'required|integer',
            'telefono',
            'correo_electronico',
            'empresa',
            'anio_titulacion' => 'required',
            'carrera_estudiante' => 'required|regex:/^[a-zA-Z\s]+$/',
            'user_id' => 'required|integer',
        ];
    }
}