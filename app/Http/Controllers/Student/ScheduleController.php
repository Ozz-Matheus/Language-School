<?php

namespace App\Http\Controllers\Student;

use App\Diary;

use App\Schedule;

use App\Enrollment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ScheduleRequest;

class ScheduleController extends Controller
{
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       $dates = Schedule::groupBy('diary_id')->where('enrollment_id', '=', auth()->user()->enrollment_id)->orderBy('diary_id','ESC')->get();
       return view('student.schedules.index', compact('dates'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $enrollment_id = auth()->user()->enrollment_id;
        $dates =  Diary::orderBy('time','ASC')->where('date', '>=', horario('date') )->get();       
        return view('student.schedules.create', compact('enrollment_id','dates'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ScheduleRequest $request)
    {
        $schedule = new Schedule($request->all());

        $schedule->Audited($request->enrollment_id);

        if($schedule->inscriptionsState($request)){

            $message = 'La Agenda se cerro el aula llego a su capacidad.';
            
        }else{

            if($schedule->inscriptionsExist($request)){

                
                $schedule->save();
                $message = 'La Agenda ha sido registrada de forma exitosa!';

            }else{

                $message = 'La Agenda ya existe!';
            }
        }

        return redirect()->route('student.schedules.index')->withFlash($message);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $enrollment_id = auth()->user()->enrollment_id;
        $schedules = Schedule::where('diary_id', '=', $id)->orderBy('enrollment_id','ASC')->get(); 
        $diary = Diary::findOrFail($id);
        return view('student.schedules.show', compact('diary','schedules','enrollment_id'));        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $schedules = Schedule::findOrFail($id);

        $schedules->Audited($schedules->enrollment_id);

        if($request->teacher_appraisal){
            $schedules->teacher_appraisal = $request->teacher_appraisal; 
            $schedules->save();
            return redirect()->route('student.schedules.index')->withFlash('La Valoración del docente ha sido registrada de forma exitosa!');

        }else{

            return redirect()->route('student.schedules.index')->withFlash('Error al enviar tu evaluacíon del docente');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $schedule = Schedule::findOrFail($id);
        $schedule->Audited($schedule->enrollment_id);
        $schedule->delete();
        $schedule->inscriptionsClosed();        
        return redirect()->route('student.schedules.index')->withFlash('La Agenda de clase ha sido eliminada de forma exitosa!');
    }
}
