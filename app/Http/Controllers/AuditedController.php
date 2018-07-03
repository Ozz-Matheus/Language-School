<?php

namespace App\Http\Controllers;

use App\Data;

use App\Employee;

use App\Appointment;

use App\Registration;

use Illuminate\Http\Request;

class AuditedController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::Audited()
            ->with('job_position','branch_office')
            ->where('id', '!=', 1)->role('Merca')
            ->get();
        return view('employee.audited.index', compact('employees'));
    }

    public function auditedData(Employee $employee)
    {
        $datas = Data::Audited($employee)->where('employee_id', '=', $employee->id)->get();      
        return view('employee.audited.data.index', compact('datas','employee'));
    }

    public function auditedAppointment(Employee $employee)
    {
         
        $appointments = Appointment::Audited($employee)->where('employee_id', '=', $employee->id)->get();  
        return view('employee.audited.appointments.index', compact('appointments','employee'));
    }


    public function auditedRegistration(Employee $employee)
    {
        
        $registrations = Registration::Audited($employee)->where('employee_id', '=', $employee->id)->get();  
        return view('employee.audited.registrations.index', compact('registrations','employee'));
    }

}
