<?php

namespace App\Http\Controllers\Student;

use App\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        return view('student.home');
    }

    public function edit(Student $student)
    {   
         $this->authorize('update', $student);
        return view('student.edit', compact('student'));
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
         $this->authorize('update', $student);
        $student->update($request->validated());
        return redirect()->route('student.home')->withFlash('El Estudiante " '. $student->name .' " ha sido editado de forma exitosa!');
    }

}
