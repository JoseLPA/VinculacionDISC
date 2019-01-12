<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConvenioUpdateRequest extends FormRequest
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
            'nombre_empresa' => 'required|regex:/^[a-zA-Z\s]+$/',
            'tipo' => 'required|in:Capstone,Marco,Específico,A+S',
            'fecha_inicio' => 'required',
            'convenio' => 'integer',
        ];
    }
}
