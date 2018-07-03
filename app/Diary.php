<?php

namespace App;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Diary extends Model
{
    protected $fillable = ['date','time','state','employee_id', 'topic_id','classroom_id'];

    public function employee()
    {
        return $this->belongsTo('App\Employee');
    }
    public function topic()
    {
        return $this->belongsTo('App\Topic');
    }
    public function classroom()
    {
        return $this->belongsTo('App\Classroom');
    }
    public function scopeAllowed($query)
    {
        if( auth()->user()->can('view', $this) )
        {
            return $query;
        }
        
        return $query->where('employee_id', auth()->id());
    }

}
