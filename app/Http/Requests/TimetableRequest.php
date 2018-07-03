<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;

use Illuminate\Foundation\Http\FormRequest;

class TimetableRequest extends FormRequest
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
            $rules = ['time' => 'required|unique:timetables'];

        }else{

            $rules['time'] = ['required', Rule::unique('timetables')->ignore($this->route('timetable')->id) ];
        }

        return $rules;

    }

    public function messages()
    {
        return [
            'time.required' => 'El campo Hora es obligatorio',
            'time.unique' => 'El Hora ya está en uso',
        ];
    }
}
