<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Explication extends Model
{
    protected $fillable = ['name','content','appointment_id'];

	public function appointments()
	{
		return $this->belongsTo('App\Appointment');
	}
}
