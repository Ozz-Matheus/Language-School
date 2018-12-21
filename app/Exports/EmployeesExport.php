<?php
namespace App\Exports;

use App\Employee;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;

class EmployeesExport implements FromCollection, WithHeadings
{
 	use Exportable;

    public function collection()
    {

		$employees = Employee::where('id', '!=', 1)->get();

        if(count($employees) > 0){

    		foreach ($employees as $employee)
    		{
    			$data[] = array(
    					    "name" => $employee->name,
    					    "email"=> $employee->email,
    					    "phone"=> $employee->phone,
    					    "mobile_phone"=> $employee->mobile_phone,
    					    "branch_office"=> $employee->branch_office ? $employee->branch_office->name : null,
    					    "job_position"=> $employee->job_position ? $employee->job_position->name : null,
                            "created_at"=> $employee->created_at->formatLocalized('%A %d %B %Y %r') ,
                            "updated_at"=> $employee->updated_at->formatLocalized('%A %d %B %Y %r') ,
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
            'NOMBRE',
            'CORREO',
            'TELÉFONO',
            'CELULAR',
            'CARGO',
            'SUCURSAL',
            'CREADO',
            'ACTUALIZADO',
        ];
    }

}