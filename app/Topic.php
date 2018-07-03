<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
	protected $fillable = ['name', 'level_id'];

    public function level()
    {
        return $this->belongsTo('App\Level');
    }
    
}
