<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Student_assessmentRequest extends FormRequest
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
            'enrollment_id' => 'required',
            'topic_id' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'qualification' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'enrollment_id.required' => 'El campo Nombre es obligatorio',
            'topic_id.required' => 'El campo Tema es obligatorio',
            'start_date.required' => 'El campo Fecha de inicio es obligatorio',
            'end_date.required' => 'El campo Fecha de final es obligatorio',
            'qualification.required' => 'El campo Calificación es obligatorio',
        ];
    }
}
