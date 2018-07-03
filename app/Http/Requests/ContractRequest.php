<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;

use Illuminate\Foundation\Http\FormRequest;

class ContractRequest extends FormRequest
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
            'date' => 'required',
            'name_of_holder' => 'required',
            'age_of_the_holder' => 'required',
            'hitch' => 'required',
            'monthly_payments' => 'required',
            'monthly_amount' => 'required',
            'balance' => 'required',
            'total_cost' => 'required',
            'payment_method' => 'required',
            'employee_id' => 'required',
            'branch_office_id' => 'required',
        ];

        if($this->method() !== 'PUT')
        {            

            $rules['order'] = ['required','unique:contracts'];

        }else{

            $rules['order'] = ['required', Rule::unique('contracts')->ignore($this->route('contract')->id) ];
        }

        return $rules;

    }

    public function messages()
    {
        return [
            'order.required' => 'El campo Folio es obligatorio',
            'order.unique' => 'El elemento Folio ya está en uso',
            'date.required' => 'El campo Fecha es obligatorio',
            'name_of_holder.required' => 'El campo Nombre del titular es obligatorio',
            'age_of_the_holder.required' => 'El campo Edad del titular es obligatorio',
            'hitch.required' => 'El campo Enganche es obligatorio',
            'monthly_payments.required' => 'El campo Mensualidades es obligatorio',
            'monthly_amount.required' => 'El campo Importe mensualidades es obligatorio',
            'balance.required' => 'El campo Saldo es obligatorio',
            'total_cost.required' => 'El campo Coste total es obligatorio',
            'payment_method.required' => 'El campo Método de pago es obligatorio',
            'employee_id.required' => 'El campo Asesor es obligatorio',
            'branch_office_id.required' => 'El campo Sucursal es obligatorio',
        ];
    }

}