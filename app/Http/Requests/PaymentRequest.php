<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaymentRequest extends FormRequest
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
            'value_of_payment' => 'required',
            'date_of_payment' => 'required',
            'contract_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'value_of_payment.required' => 'El campo Titular del contrato es obligatorio',
            'date_of_payment.required' => 'El campo Fecha del abono es obligatorio',
            'contract_id.required' => 'El campo Valor a abonar es obligatorio',
        ];
    }
}
