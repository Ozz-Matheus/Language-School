<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;

use Illuminate\Foundation\Http\FormRequest;

class ClassroomRequest extends FormRequest
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
            'capacity' => 'required',
            'branch_office_id' => 'required',
        ];

        if($this->method() !== 'PUT')
        {

            $rules['name'] = ['required','unique:classrooms'];

        }else{

            $rules['name'] = ['required', Rule::unique('classrooms')->ignore($this->route('classroom')->id) ];
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'name.required' => 'El campo Nombre es obligatorio',
            'name.max' => 'El campo Nombre debe contener maximo 255 caracteres',
            'name.min' => 'El campo Nombre debe contener al menos 1 caracteres',
            'name.unique' => 'El Nombre ya está en uso',
            'capacity.required' => 'El campo Capacidad es obligatorio',
            'branch_office_id.required' => 'El campo Sucursal es obligatorio',
        ];
    }
}
