<?php

namespace App\Http\Controllers;

use App\Explication;

use Illuminate\Http\Request;

class ExplicationController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $explication = new Explication();
        $explication->name =\Auth::guard('employee')->user()->name;
        $explication->content = $request->content;
        $explication->appointment_id = $request->id;
        $explication->save();

        return redirect()->route('employee.appointments.show', $explication->appointment_id)->withFlash('Se ha agregado tu comentario "'. $explication->name . '" .');
    }

}
