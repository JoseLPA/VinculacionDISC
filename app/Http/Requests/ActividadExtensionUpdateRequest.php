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
            'titulo_actividad' => 'required|regex:/^[a-zA-Z\s]+$/',
            'nombre_expositor' => 'required|regex:/^[a-zA-Z\s]+$/',
            'fecha' => 'required',
            'ubicacion' => 'required',
            'cantidad_asistentes' => 'required|integer',
        ];
    }
}