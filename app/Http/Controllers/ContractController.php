<?php

namespace App\Http\Controllers;

use App\Contract;

use App\Employee;

use App\Branch_office;

use Illuminate\Http\Request;
use App\Http\Requests\ContractRequest;

class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contracts = Contract::with('branch_office')->get();
        return view('employee.contracts.index', compact('contracts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employees = Employee::where('id', '!=', 1)->orderBy('name','ASC')->get();
        $branch_offices = Branch_office::orderBy('name','ASC')->get();
        $date = horario('date');
        return view('employee.contracts.create', compact('employees','branch_offices','date'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContractRequest $request)
    {
        $contract = new Contract($request->all());
        if($request->hitch == $request->total_cost){ $contract->state = '0'; }
        $contract->save();
        $contract->associateHitch();
        $contract->makeEnrollments($request);
        return redirect()->route('employee.contracts.index')->withFlash('El Contrato con número de folio " '. $request->name_of_holder .' " ha sido registrado de forma exitosa!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Contract $contract)
    {
        return view('employee.contracts.show', compact('contract'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Contract $contract)
    {
        $employees = Employee::where('id', '!=', 1)->orderBy('name','ASC')->get();
        $branch_offices = Branch_office::orderBy('name','ASC')->get();
        return view('employee.contracts.edit', compact('contract','employees','branch_offices'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ContractRequest $request, Contract $contract)
    {
        $update = $request->all();
        $contract->fill($update)->save();
        return redirect()->route('employee.contracts.index')->withFlash('El Contrato con número de folio " '. $contract->order .' " ha sido editado de forma exitosa!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contract $contract)
    {
        $contract->delete();
        return redirect()->route('employee.contracts.index')->withFlash('El Contrato con número de folio " '. $contract->order .' " ha sido eliminado de forma exitosa!');    
    }
}
