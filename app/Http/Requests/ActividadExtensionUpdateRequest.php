<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActividadExtensionUpdateRequest extends FormRequest
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
            'titulo_actividad' => 'required',
            'nombre_expositor' => 'required',
            'fecha' => 'required',
            'ubicacion' => 'required',
            'cantidad_asistentes' => 'required|int',
            'organizador_actividad' => 'required',
            'evidencia' => 'required|mimes:pdf,jpg,jpeg,png',
        ];
    }
}