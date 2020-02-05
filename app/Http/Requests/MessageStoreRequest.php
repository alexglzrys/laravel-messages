<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessageStoreRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:3'
        ];
    }

    // Personalizar el contexto de los nombres enviados en el formulario
    public function attributes()
    {
        // El cambio de idioma se hace de forma dinámica - multi-idioma
        return [
            'name' => __('name'),
            'subject' => __('subject'),
            'content' => __('content')
        ];
    }

    // Personalizar el contexto (mensaje) de cada regla de validación
    public function messages()
    {
        return [
            'name.required' => 'El :attribute es un dato obligatorio',
            'email.required' => 'El :attribute es un dato obligatorio',
            'subject.required' => 'El :attribute es un dato obligatorio',
            'content.required' => 'El :attribute es un dato obligatorio'
        ];
    }
}
