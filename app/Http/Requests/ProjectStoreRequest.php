<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectStoreRequest extends FormRequest
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
        // Campos de formulario a validar contra el servidor.
        // Tip: El resultado de la validación, se puede emplear para indicar a la base de datos que estos campos pueden ser asignados masivamente durante el registro de información
        return [
            'title' => 'required',
            'url' => 'required|unique:projects,url',
            'description' => 'required|min:10|max:500'
        ];
    }

    // Personalizar los mensajes para este FormRequest
    public function messages()
    {
        return [
            'title.required' => 'El proyecto necesita un titulo',
            'description.required' => 'El proyecto necesita una descripción detallada',
            'url.required' => 'El proyecto require de una url única que lo identifique en el sistema',
        ];
    }
}
