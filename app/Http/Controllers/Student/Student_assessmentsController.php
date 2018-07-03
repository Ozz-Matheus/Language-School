<?php

namespace App\Http\Controllers\Student;

use App\Topic;
use App\Student_assessment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Student_assessmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student_assessments = Student_assessment::with('topic')->where('enrollment_id','=', auth()->user()->id)->get();
        return view('student.student_assessments.index', compact('student_assessments'));
    }

}
