<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectUpdateRequest extends FormRequest
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
        // dd($this->project);
        return [
            'title' => 'required',
            // url debe ser única en la tabla projects campo url a excepción de este id
            //
            // Cuando se envía la instancia de modelo ("$project") completa como parametro de ruta al controlador de actualizar, Laravel lo inyecta por completo, por tanto es necesario acceder a su id de forma explicita dentro de este FormRequest.
            'url' => 'required|unique:projects,url,' . $this->project->id,
            'description' => 'required|min:10|max:500',
        ];
    }
}
