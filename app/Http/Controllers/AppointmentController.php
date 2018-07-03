<?php

namespace App\Http\Controllers;

use App\Appointment;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointments = Appointment::allowed()->get();
        return view('employee.appointments.index', compact('appointments'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        $this->authorize('view', $appointment);
        $explications = $appointment->explications->reverse();
        return view('employee.appointments.show', compact('appointment','explications'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
         $this->authorize('delete', $appointment);
        $appointment->delete();
        return redirect()->route('employee.appointments.index')->withFlash('La Cita ha sido eliminada de forma exitosa!');
    }

    public function allAppointments(){  
        $appointments = Appointment::all();
        return view('employee.all-appointments.index', compact('appointments'));
    }

    public function allAppointmentsShow(Appointment $appointment){  
        return view('employee.all-appointments.show', compact('appointment'));
    }

}
