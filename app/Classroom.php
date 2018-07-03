<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $fillable = ['name','capacity','branch_office_id'];

	public function branch_office()
	{
	    return $this->belongsTo('App\Branch_office');
	}
	
}
