<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class ServicioAprendizajeUpdateRequest extends FormRequest
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
            'nombre_asignatura' => 'required',
            'nombre_profesor' => 'required',
            'cantidad_estudiantes' => 'required',
            'nombre_asignatura' => 'required',
            'semestre' => 'required|in:1,2',
            'año' => 'required',
            'evidencia' => 'required|mimes:pdf',
        ];
    }
}