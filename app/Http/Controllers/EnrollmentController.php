<?php

namespace App\Http\Controllers;

use App\Level;

use App\Contract;

use App\Enrollment;

use App\Branch_office;

use Illuminate\Http\Request;

use App\Http\Requests\EnrollmentRequest;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enrollments = Enrollment::with('branch_office')->get();
        return view('employee.enrollments.index', compact('enrollments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contracts = Contract::orderBy('order','ASC')->get();
        $levels = Level::orderBy('id','ASC')->get();;
        $branch_offices = Branch_office::orderBy('name','ASC')->get();
        return view('employee.enrollments.create', compact('branch_offices','levels','contracts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EnrollmentRequest $request)
    {
        $contract = Contract::findOrfail($request->contract_id);
        $suma = $contract->total_cost+$request->add;
        $contract->total_cost = (string) $suma;
        $contract->save();
        $enrollment = Enrollment::create($request->validated());
        return redirect()->route('employee.enrollments.index')->withFlash('La Matrícula de " '. $enrollment->name .' " ha sido registrada de forma exitosa!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Enrollment $enrollment)
    {
        return view('employee.enrollments.show', compact('enrollment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Enrollment $enrollment)
    {        
        $levels = Level::orderBy('id','ASC')->get();;
        $branch_offices = Branch_office::orderBy('name','ASC')->get();
        return view('employee.enrollments.edit', compact('enrollment','levels','branch_offices'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EnrollmentRequest $request, Enrollment $enrollment)
    {
        $enrollment->update($request->validated());
        return redirect()->route('employee.enrollments.index')->withFlash('La Matrícula " '. $enrollment->name .' " ha sido editada de forma exitosa!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enrollment $enrollment)
    {
        $enrollment->delete();
        return redirect()->route('employee.enrollments.index')->withFlash('La Matrícula " '. $enrollment->name .' " ha sido eliminada de forma exitosa!');
    }
}
