<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
	protected $fillable = ['value_of_payment','date_of_payment','contract_id'];
	    
    public function contract()
    {
        return $this->belongsTo('App\Contract');
    }
    public function contractState($contract_id, $value_of_payment, $total_cost){

        $payments = $this::where('contract_id', '=', $contract_id)->get();

        $totalPayment = null;

        foreach($payments as $payment){
                $totalPayment = $payment->value_of_payment + $value_of_payment; 
        }
        
        if($totalPayment >= $total_cost){ return '0'; }else{ return '1'; }

    }

}
