<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;

use Illuminate\Foundation\Http\FormRequest;

class EnrollmentRequest extends FormRequest
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
            'name' => 'required',
            'age' => 'required',
            'sex' => 'nullable',
            'mobile_phone'=>'nullable',
            'level_id' => 'required',
            'branch_office_id' => 'required',
            
            
            'phone'=>'nullable',
            
        ];

        if($this->method() !== 'PUT')
        { 
            $rules['registration_number'] = ['required','unique:enrollments'];
            $rules['contract_id'] = ['required'];
            $rules['add'] = ['required'];

        }else{

            $rules['registration_number'] = ['required', Rule::unique('enrollments')->ignore($this->route('enrollment')->id) ];
        }

        return $rules;

    }

    public function messages()
    {
        return [
            'contract_id.required' => 'El campo Contrato es obligatorio',
            'add.required' => 'El campo Valor a adicionar es obligatorio',
            'name.required' => 'El campo Nombre es obligatorio',
            'age.required' => 'El campo Edad es obligatorio',
            'registration_number.required' => 'El campo Número de matrícula es obligatorio',
            'registration_number.unique' => 'El elemento Número de matrícula ya está en uso',
            'level_id.required' => 'El campo Nivel es obligatorio',
            'branch_office_id.required' => 'El campo Sucursal es obligatorio',
        ];
    }
}
