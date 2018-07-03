<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['name','content','data_id'];

	public function data()
	{
		return $this->belongsTo('App\Data');
	}
}
