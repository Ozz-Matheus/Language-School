<?php

namespace App\Http\Controllers;

use App\Student;
use App\Enrollment;

use Illuminate\Http\Request;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::with('enrollment')->get();
        return view('employee.students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $enrollments = Enrollment::orderBy('name','ASC')->get();
        return view('employee.students.create', compact('enrollments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentRequest $request)
    {
        $name = Enrollment::findOrFail($request->enrollment_id)->name;
        $student = new Student($request->all());
        $student->name = $name;
        $student->password = $request->password;
        $student->save();        
        
        return redirect()->route('employee.students.index')->withFlash('El Estudiante " '. $student->name .' " ha sido registrado de forma exitosa!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('employee.students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        $student->update($request->validated());
        return redirect()->route('employee.students.index')->withFlash('El Estudiante " '. $student->name .' " ha sido editado de forma exitosa!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('employee.students.index')->withFlash('El Estudiante " '. $student->name .' " ha sido eliminado de forma exitosa!');
    }
}
