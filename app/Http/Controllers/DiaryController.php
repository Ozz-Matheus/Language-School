<?php

namespace App\Http\Controllers;

use App\Topic;
use App\Diary;
use App\Employee;
use App\Classroom;
use App\Timetable;
use App\Schedule;
use Illuminate\Http\Request;
use App\Http\Requests\DiaryRequest;

class DiaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dates =  Diary::allowed()->get();
        return view('employee.diaries.index', compact('dates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $topics = Topic::orderBy('name','ASC')->get();
        $classrooms = Classroom::get();
        $timetables = Timetable::get();
        $date = horario('tomorrow');

        $employees = Employee::allowed()->role('Docen')->get();

        if(count($employees) > 1){

            return view('employee.diaries.create', compact('employees','topics','classrooms','timetables','date'));

        }else{

            $employee = $employees->first();
            return view('employee.my-diaries.create', compact('employee','topics','classrooms','timetables','date'));
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DiaryRequest $request)
    {
        $diaries = Diary::where('date', '=', $request->date)->where('time', '=', $request->time)->where('classroom_id', '=', $request->classroom_id)->count();

        if($diaries == 0){

            $diary = new Diary($request->all());
            $diary->save();
            return redirect()->route('employee.diaries.index')->withFlash('La Agenda ha sido registrada de forma exitosa!');

        }else{

            return redirect()->route('employee.diaries.index')->withFlash('La Agenda ya existe!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Diary $diary)
    {
        $this->authorize('view', $diary);

        $schedules = Schedule::where('diary_id', '=', $diary->id)->orderBy('enrollment_id','ASC')->get(); 
        return view('employee.diaries.show', compact('diary','schedules'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Diary $diary)
    {
        $this->authorize('update', $diary);
        $diary->state = $request->state;
        $diary->save();
        return back()->withFlash('La Agenda ha sido modificada de forma exitosa!');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function schedule(Request $request, Diary $diary)
    {
        $this->authorize('update', $diary);

        $schedules = Schedule::findOrFail($diary->id);

        if($request->presence_of_the_student){

            $schedules->presence_of_the_student = $request->presence_of_the_student; 
            $schedules->save();
            return redirect()->route('employee.diaries.index')->withFlash('La Asistencia ha sido registrada de forma exitosa!');

        }else{

            return redirect()->route('employee.diaries.index')->withFlash('Error al enviar tu Asistencia de el Estudiante');
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Diary $diary)
    {
        $this->authorize('delete', $diary);
        $diary->delete();
        return redirect()->route('employee.diaries.index')->withFlash('La Agenda ha sido eliminada de forma exitosa!');
    }
}
