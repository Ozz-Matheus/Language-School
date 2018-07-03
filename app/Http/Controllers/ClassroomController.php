<?php

namespace App\Http\Controllers;

use App\Classroom;

use App\Branch_office;

use Illuminate\Http\Request;

use App\Http\Requests\ClassroomRequest;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classrooms = Classroom::with('branch_office')->get();
        return view('employee.classrooms.index', compact('classrooms')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $branch_offices = Branch_office::orderBy('name','ASC')->get();
        return view('employee.classrooms.create', compact('branch_offices'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClassroomRequest $request)
    {

        $classroom = classroom::create($request->validated());
        return redirect()->route('employee.classrooms.index')->withFlash('EL Aula " '. $classroom->name .' " ha sido registrada de forma exitosa!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Classroom $classroom)
    {
        $branch_offices = Branch_office::orderBy('name','ASC')->get();
        return view('employee.classrooms.edit', compact('classroom','branch_offices'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClassroomRequest $request, Classroom $classroom)
    {
        $classroom->update($request->validated());
        return redirect()->route('employee.classrooms.index')->withFlash('El Aula " '. $classroom->name .' " ha sido editada de forma exitosa!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classroom $classroom)
    {
        $classroom->delete();
        return redirect()->route('employee.classrooms.index')->withFlash('El Aula " '. $classroom->name .' " ha sido eliminada de forma exitosa!');
    }
}
