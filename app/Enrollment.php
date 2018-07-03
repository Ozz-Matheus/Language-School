<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
   protected $fillable = ['name','age','sex','mobile_phone','registration_number','level_id','branch_office_id','contract_id'];

    public function level()
    {
        return $this->belongsTo('App\Level');
    }
    public function branch_office()
    {
        return $this->belongsTo('App\Branch_office');
    }
    public function contract()
    {
        return $this->belongsTo('App\Contract');
    }
    
}
