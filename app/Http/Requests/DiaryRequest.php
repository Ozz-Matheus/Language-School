<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DiaryRequest extends FormRequest
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
            'employee_id' => 'required',
            'topic_id' => 'required',
            'classroom_id' => 'required',
            'date'=>'required',
            'time'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'employee_id.required' => 'El campo Docente es obligatorio',
            'topic_id.required' => 'El campo Tema es obligatorio',
            'classroom_id.required' => 'El campo Aula es obligatorio',
            'date.required' => 'El campo Fecha es obligatorio',
            'time.required' => 'El campo Hora es obligatorio',
        ];
    }
}
