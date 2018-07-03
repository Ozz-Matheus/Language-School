<?php

namespace App\Http\Controllers;

use App\Registration;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registrations = Registration::allowed()->get();
        return view('employee.registrations.index', compact('registrations'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Registration $registration)
    {
        $this->authorize('view', $registration);
        return view('employee.registrations.show', compact('registration'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registration $registration)
    {
        $this->authorize('delete', $registration);
        $registration->delete();
        return redirect()->route('employee.registrations.index')->withFlash('El Registro ha sido eliminado de forma exitosa!');
    }
}
