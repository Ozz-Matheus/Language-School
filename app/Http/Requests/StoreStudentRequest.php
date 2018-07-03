<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
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
            'enrollment_id' => 'required|unique:students',
            'email' => 'required|email|min:5|max:255|unique:students',
            'password' => 'required|min:6|max:120',
           
        ];
    }

    public function messages()
    {
        return [
            'enrollment_id.required' => 'El campo Nombre es obligatorio',
            'enrollment_id.unique' => 'El acceso ya existe',
            'email.required' => 'El campo Correo Electronico es obligatorio',
            'email.email' => 'El campo Correo Electronico  no corresponde con una dirección de e-mail válida.',
            'email.max' => 'El campo Correo Electronico debe contener maximo 255 caracteres',
            'email.min' => 'El campo Correo Electronico debe contener al menos 5 caracteres',
            'email.unique' => 'El elemento Correo Electronico ya está en uso',
            'password.required' => 'El campo Contraseña es obligatorio',
            'password.min' => 'El campo Contraseña debe contener al menos 6 caracteres',
            'password.max' => 'El campo Contraseña debe contener maximo 120 caracteres',
        ];
    }
}
