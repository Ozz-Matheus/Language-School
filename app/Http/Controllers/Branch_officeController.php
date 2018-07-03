<?php

namespace App\Http\Controllers;

use App\Branch_office;

use Illuminate\Http\Request;

use App\Http\Requests\Branch_officeRequest;

class Branch_officeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branch_offices = Branch_office::all();
        return view('employee.branch-offices.index', compact('branch_offices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.branch-offices.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Branch_officeRequest $request)
    {
        
        $branch_office = Branch_office::create($request->validated());
        return redirect()->route('employee.branch-offices.index')->withFlash('Sucursal " '. $branch_office->name .' " ha sido registrada de forma exitosa!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(branch_office $branch_office)
    {
        return view('employee.branch-offices.edit', compact('branch_office'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Branch_officeRequest $request, branch_office $branch_office)
    {
        
        $branch_office->update($request->validated());
        return redirect()->route('employee.branch-offices.index')->withFlash('Sucursal " '. $branch_office->name .' " ha sido editada de forma exitosa!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(branch_office $branch_office)
    {
        $branch_office->delete();
        return redirect()->route('employee.branch-offices.index')->withFlash('La Sucursal " '. $branch_office->name .' " ha sido eliminada de forma exitosa!');
    }
    
}
