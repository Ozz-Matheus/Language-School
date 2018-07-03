<?php

namespace App;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Student_assessment extends Model
{
	protected $fillable = ['qualification','start_date','end_date','enrollment_id','topic_id'];

    public function enrollment()
    {
        return $this->belongsTo('App\Enrollment');
    }
    public function Topic()
    {
        return $this->belongsTo('App\Topic');
    }

}
