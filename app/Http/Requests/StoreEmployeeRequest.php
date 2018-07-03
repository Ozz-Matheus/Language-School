<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
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

            'name' => 'required|string|max:255|min:1|',
            'email' => 'required|string|email|max:255|min:5|unique:employees',
            'password' => 'required|string|min:6|max:120',
            'sex' => 'nullable',
            'job_position_id'=>'nullable',
            'branch_office_id' => 'nullable',
            'direct_boss'=>'nullable',
            'phone'=>'nullable',
            'mobile_phone'=>'nullable',
        ];

        return $rules;
    }

    public function messages()
    {
        return [
            'name.required' => 'El campo Nombre es obligatorio',
            'name.max' => 'El campo Nombre debe contener maximo 120 caracteres',
            'name.min' => 'El campo Nombre debe contener al menos 1 caracteres',
            'email.required' => 'El campo Correo Electronico es obligatorio',
            'email.email' => 'El campo Correo Electronico  no corresponde con una dirección de e-mail válida.',
            'email.max' => 'El campo Correo Electronico debe contener maximo 250 caracteres',
            'email.min' => 'El campo Correo Electronico debe contener al menos 5 caracteres',
            'email.unique' => 'El elemento Correo Electronico ya está en uso',
            'password.required' => 'El campo Contraseña es obligatorio',
            'password.min' => 'El campo Contraseña debe contener al menos 6 caracteres',
            'password.max' => 'El campo Contraseña debe contener maximo 120 caracteres',
            'password.confirmed' => 'El campo Confirma la contraseña no coincide',
            'password_confirmation.required' => 'El campo Confirma la contraseña es obligatorio',
        ];
    }

}