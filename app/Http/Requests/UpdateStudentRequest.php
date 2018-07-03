<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStudentRequest extends FormRequest
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
        $rules = [
            'name'     => 'min:1|max:120|required',
            'email' => ['min:5', 'max:255' , 'email' ,'required', Rule::unique('students')->ignore($this->route('student')->id) ],            
        ];

        if($this->filled('password'))
        {
            $rules['password'] = ['min:6', 'max:120', 'confirmed'];
            $rules['password_confirmation'] = ['required'];
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'name.required' => 'El campo Nombre es obligatorio',
            'name.min' => 'El campo Nombre debe contener al menos 1 caracteres',
            'name.max' => 'El campo Nombre debe contener maximo 120 caracteres',
            'email.required' => 'El campo Correo Electronico es obligatorio',
            'email.min' => 'El campo Correo Electronico debe contener al menos 5 caracteres',
            'email.max' => 'El campo Correo Electronico debe contener maximo 255 caracteres',
            'email.unique' => 'El elemento Correo Electronico ya está en uso',
            'password.min' => 'El campo Contraseña debe contener al menos 6 caracteres',
            'password.max' => 'El campo Contraseña debe contener maximo 120 caracteres',
            'password.confirmed' => 'El campo Confirma la contraseña no coincide',
            'password_confirmation.required' => 'El campo Confirma la contraseña es obligatorio',
        ];
    }
    
}
