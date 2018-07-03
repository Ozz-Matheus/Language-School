<?php
namespace App\Exports;

use App\Enrollment;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;

class EnrollmentsExport implements FromCollection, WithHeadings
{
 	use Exportable;

    public function collection()
    {
		$enrollments = Enrollment::all();

        if(count($enrollments) > 0){

    		foreach ($enrollments as $enrollment) 
    		{
    			$data[] = array(
                            "registration_number" => $enrollment->registration_number,
    					    "name" => $enrollment->name,
    					    "age"=> $enrollment->age,
    					    "mobile_phone"=> $enrollment->mobile_phone,
    					    "branch_office"=> $enrollment->branch_office->name,
    					    "level"=> $enrollment->level->name,
                            "order" => (string) $enrollment->contract->order,
                            "name_of_holder" => $enrollment->contract->name_of_holder,
                            "created_at"=> $enrollment->created_at->formatLocalized('%A %d %B %Y %r') ,
                            "updated_at"=> $enrollment->updated_at->formatLocalized('%A %d %B %Y %r') ,
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
            'NÚMERO DE MATRÍCULA',
            'NOMBRE',
            'EDAD',
            'CELULAR',
            'SUCURSAL',
            'NIVEL',
            'FOLIO DEL CONTRATO',
            'NOMBRE DEL TITULAR DEL CONTRATO',
            'CREADO',
            'ACTUALIZADO',
        ];
    }

}

