<?php

namespace App;

use App\Diary;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = ['enrollment_id', 'diary_id'];

	public function enrollment(){

		return $this->belongsTo('App\Enrollment');
	}
	public function diary(){

		return $this->belongsTo('App\Diary');
	}
    public function inscriptionsExist($request){

        $schedules = $this::where('enrollment_id', '=', $request->enrollment_id)->where('diary_id', '=', $request->diary_id)->count();

        if($schedules == 0){

            return true;

        }else{ return false; }
    
    }
    public function inscriptionsState($request){

        $quantity = $this::where('diary_id', '=', $request->diary_id)->count();
        $diary = Diary::find($request->diary_id);
        $capacity = $diary->classroom->capacity;
        
        if($quantity == $capacity){

            $diary->state = '0';
            $diary->save();
            return true; 

        }else{ return false; }
    
    }
    public function inscriptionsClosed(){

    	$diary_id = $this->diary_id;
        $quantity = $this::where('diary_id', '=', $diary_id)->count();
        $diary = Diary::find($diary_id);
        $capacity = $diary->classroom->capacity;
        if($quantity !== $capacity){

            $diary->state = '1';
            $diary->save();

        }
    
    }
    public function Audited($enrollment_id)
    {

        if( auth()->id() != $enrollment_id )   
        {
            return abort('403');

        }

    }


}
