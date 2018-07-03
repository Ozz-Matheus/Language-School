<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;

use Illuminate\Foundation\Http\FormRequest;

class Job_positionRequest extends FormRequest
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

        if($this->method() !== 'PUT')
        {            
            $rules = [ 'name' => 'required|max:255|unique:job_positions', ];

        }else{

            $rules['name'] = ['max:255' ,'required', Rule::unique('job_positions')->ignore($this->route('job_position')->id) ];
        }

        return $rules;

    }

    public function messages()
    {
        return [
            'name.required' => 'El campo Nombre es obligatorio',
            'name.max' => 'El campo Nombre debe contener maximo 255 caracteres',
            'name.unique' => 'El Nombre ya está en uso',
        ];
    }
    
}
