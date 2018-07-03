<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ScheduleRequest extends FormRequest
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
            'diary_id' => 'required',
            'enrollment_id' => 'required',
            'teacher_appraisal' =>'nullable',
            'presence_of_the_student' =>'nullable',
        ];
    }

    public function messages()
    {
        return [
            'diary_id.required' => 'El campo Clase es obligatorio',
            'enrollment_id.required' => 'El campo Estudiante es obligatorio',
        ];
    }
}
