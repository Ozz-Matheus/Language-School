<?php

namespace App\Http\Controllers\Student;

use App\Level;

use App\Payment;

use App\Contract;

use App\Enrollment;

use App\Branch_office;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = auth()->user()->enrollment_id;
        $enrollment = Enrollment::with(['level','branch_office','contract'])->findOrFail($student);
        $payments = Payment::where('contract_id', '=', $enrollment->contract_id)->get();
        $totalPayment = null;
        foreach($payments as $payment){  $totalPayment = $payment->value_of_payment + $totalPayment; }
        return view('student.enrollment.index', compact('enrollment','payments','totalPayment'));
    }

}
