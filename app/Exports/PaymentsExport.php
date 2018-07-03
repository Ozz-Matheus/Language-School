<?php
namespace App\Exports;

use App\Contract;
use App\Payment;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PaymentsExport implements FromCollection, WithHeadings
{
 	use Exportable;

    public function collection()
    {

		$id = request()->segment(4);
        $contract = Contract::findOrFail($id);
        $payments = Payment::where('contract_id', '=', $contract->id)->get();

        if(count($payments) > 0){

            foreach ($payments as $payment){
                $data[] = array(
                            "order" => (string) $payment->contract->order,
                            "name_of_holder" => $payment->contract->name_of_holder,
                            "date_of_payment"=> $payment->date_of_payment,
                            "value_of_payment"=> '$ '.$payment->value_of_payment.' MXN',
                            "created_at"=> $payment->created_at->formatLocalized('%A %d %B %Y %r') ,
                            "updated_at"=> $payment->updated_at->formatLocalized('%A %d %B %Y %r') ,
                );
            }
    		    	
        	return collect($data); 
        }

        $array[] = array(
                    "vacio" => null,
        );

        return collect($array);
		    	
    }

    public function headings(): array
    {
        return [
            'FOLIO',
            'NOMBRE DEL TITULAR',
            'FECHA DEL ABONO',
            'VALOR DEL ABONO',
            'CREADO',
            'ACTUALIZADO',
        ];
    }

}