<?php
namespace App\Exports;

use App\Contract;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ContractsExport implements FromCollection, WithHeadings
{
 	use Exportable;

    public function collection()
    {
		$contracts = Contract::all();

        if(count($contracts) > 0){

    		foreach ($contracts as $contract) 
    		{
    			$data[] = array(
    					    "order" => $contract->order,
    					    "date"=> $contract->date,
    					    "name_of_holder"=> $contract->name_of_holder,
    					    "age_of_the_holder"=> $contract->age_of_the_holder,
                            "hitch"=> $contract->hitch,
                            "monthly_payments"=> $contract->monthly_payments,
                            "monthly_amount"=> $contract->monthly_amount,
                            "balance"=> $contract->balance,
                            "total_cost"=> $contract->total_cost,
                            "payment_method"=> $contract->payment_method,
                            "bank"=> $contract->bank,
                            "employee"=> $contract->employee->name,
    					    "branch_office"=> $contract->branch_office->name,
                            "created_at"=> $contract->created_at->formatLocalized('%A %d %B %Y %r') ,
                            "updated_at"=> $contract->updated_at->formatLocalized('%A %d %B %Y %r') ,
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
            'FECHA',
            'NOMBRE DEL TITULAR',
            'EDAD DEL TITULAR',
            'ENGANCHE',
            'MENSUALIDADES',
            'IMPORTE MENSUALIDADES',
            'SALDO',
            'COSTE TOTAL',
            'MÉTODO DE PAGO',
            'BANCO',
            'ASESOR',
            'SUCURSAL',
            'CREADO',
            'ACTUALIZADO',
        ];
    }

}