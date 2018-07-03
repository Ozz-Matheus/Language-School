<?php

namespace App\Http\Controllers;

use App\Hour;
use App\Timetable;

use Illuminate\Http\Request;
use App\Http\Requests\TimetableRequest;

class TimetableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $timetables = Timetable::all();
        return view('employee.timetables.index', compact('timetables'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $hours = Hour::all();
        return view('employee.timetables.create', compact('hours'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TimetableRequest $request)
    {
        $timetable = Timetable::create($request->validated());
        return redirect()->route('employee.timetables.index')->withFlash('El horario ha sido registrado de forma exitosa!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Timetable $timetable)
    {
        $hours = Hour::all();
        return view('employee.timetables.edit', compact('hours','timetable'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TimetableRequest $request, Timetable $timetable)
    {
        $timetable->update($request->validated());
        return redirect()->route('employee.timetables.index')->withFlash('El horario ha sido editado de forma exitosa!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Timetable $timetable)
    {
        $timetable->delete();
        return redirect()->route('employee.timetables.index')->withFlash('El horario ha sido eliminado de forma exitosa!');;
    }
}
