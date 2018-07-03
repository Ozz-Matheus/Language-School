<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;

use Illuminate\Foundation\Http\FormRequest;

class TopicRequest extends FormRequest
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

        'level_id' => 'required',

        ];

        if($this->method() !== 'PUT')
        {            
            $rules['name'] = ['required','max:255','unique:topics'];  

        }else{

            $rules['name'] = ['required', 'max:255', Rule::unique('topics')->ignore($this->route('topic')->id) ];
        }

        return $rules;

    }

    public function messages()
    {
        return [
            'level_id.required' => 'El campo Nivel es obligatorio',
            'name.required' => 'El campo Nombre es obligatorio',
            'name.max' => 'El campo Nombre debe contener maximo 255 caracteres',
            'name.unique' => 'El Nombre ya está en uso',
        ];
    }
    
}
