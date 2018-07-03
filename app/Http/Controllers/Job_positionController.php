<?php

namespace App\Http\Controllers;

use App\Job_position;
use Illuminate\Http\Request;
use App\Http\Requests\Job_positionRequest;

class Job_positionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $job_positions = Job_position::all();
        return view('employee.job-positions.index', compact('job_positions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.job-positions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Job_positionRequest $request)
    {
        $job_position = Job_position::create($request->validated());
        return redirect()->route('employee.job-positions.index')->withFlash('El Puesto " '. $job_position->name .' " ha sido registrado de forma exitosa!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Job_position $job_position)
    {
        return view('employee.job-positions.edit', compact('job_position'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Job_positionRequest $request, Job_position $job_position)
    {
        $job_position->update($request->validated());
        return redirect()->route('employee.job-positions.index')->withFlash('El Puesto " '. $job_position->name .' " ha sido editado de forma exitosa!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job_position $job_position)
    {
    
        $job_position->delete();
        $message = 'El Puesto " '. $job_position->name .' " ha sido eliminado de forma exitosa!';        
        return redirect()->route('employee.job-positions.index')->withFlash($message);
    }
}
