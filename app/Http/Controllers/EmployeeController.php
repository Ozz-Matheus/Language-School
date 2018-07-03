<?php

namespace App\Http\Controllers;

use App\Employee;

use App\Job_position;

use App\Branch_office;

use Illuminate\Http\Request;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::allowed()
                        ->with(['job_position','branch_office'])
                        ->where('id', '!=', 1)
                        ->get();
        return view('employee.employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', new Employee);
        $employees = Employee::where('id', '!=', 1)->orderBy('name','ASC')->get();
        $branch_offices = Branch_office::orderBy('name','ASC')->get();
        $job_positions = Job_position::where('id', '!=', 1)->orderBy('name','ASC')->get();
        $roles = Role::all();
        return view('employee.employees.create', compact('roles','employees','job_positions','branch_offices'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmployeeRequest $request)
    {
        $this->authorize('create', new Employee);
        $employee = Employee::create($request->validated());
        return redirect()->route('employee.employees.index')->withFlash('El usuario " '. $employee->name .' " ha sido registrado de forma exitosa!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        $this->authorize('view', $employee);
        return view('employee.employees.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        $this->authorize('update', $employee);

        $roles = Role::where('id', '!=', 1)->get();
        $employees = Employee::where('id', '!=', 1)->where('id', '!=', $employee->id)->orderBy('name','ASC')->get();
        $job_positions = Job_position::where('id', '!=', 1)->orderBy('name','ASC')->get();
        $branch_offices = Branch_office::orderBy('name','ASC')->get();
        return view('employee.employees.edit', compact('employee','employees','job_positions', 'branch_offices','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        $this->authorize('update', $employee);
        $employee->update($request->validated());
        if($request->filled('roles'))
        {
             $employee->roles()->detach();
             $employee->assignRole($request->roles);   
        }
        return redirect()->route('employee.employees.index')->withFlash('El usuario " '. $employee->name .' " ha sido editado de forma exitosa!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $this->authorize('delete', $employee);
        $employee->delete();
        return redirect()->route('employee.employees.index')->withFlash('El usuario " '. $employee->name .' " ha sido eliminado de forma exitosa!');
    }
}
