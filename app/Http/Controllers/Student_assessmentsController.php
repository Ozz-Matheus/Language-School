<?php

namespace App\Http\Controllers;

use App\Topic;

use App\Enrollment;

use App\Student_assessment;

use Illuminate\Http\Request;

use App\Http\Requests\Student_assessmentRequest;

class Student_assessmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enrollments = Enrollment::with(['branch_office', 'level'])->get();
        return view('employee.student_assessments.index', compact('enrollments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $date = horario('date');
        $enrollments = Enrollment::orderBy('name','ASC')->get();
        $topics = Topic::orderBy('name','ASC')->get();
        return view('employee.student_assessments.create', compact('enrollments','topics','date'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Student_assessmentRequest $request)
    {
        $student_assessments = Student_assessment::create($request->validated());
        return redirect()->route('employee.student_assessments.index')->withFlash('La Calificación ha sido registrada de forma exitosa!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Enrollment::findOrFail($id);
        $student_assessments = Student_assessment::with(['topic','enrollment'])->where('enrollment_id','=', $id)->get();
        return view('employee.student_assessments.show', compact('student_assessments','student'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student_assessments = Student_assessment::findOrFail($id);
        $student_assessments->delete();
        return redirect()->route('employee.student_assessments.index')->withFlash('La Calificación ha sido eliminada de forma exitosa!');
    }
}
