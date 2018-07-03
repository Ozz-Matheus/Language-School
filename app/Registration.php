<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    public function employee()
    {
        return $this->belongsTo('App\Employee');
    }
    public function scopeAllowed($query)
    {
        if( auth()->user()->can('view', $this) )
        {
            return $query;
        }
        
        return $query->where('employee_id', auth()->id());
    }
    public function scopeAudited($query, $employee)
    {

        if( auth()->user()->hasRole(['Super','Admin']) || auth()->id() === $employee->direct_boss )   
        {
            return $query;

        }

        return abort('403');

    }

}
