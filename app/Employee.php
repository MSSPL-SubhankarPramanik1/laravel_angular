<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
   	protected $fillable = array('id', 'name', 'email','contact_number','position');

	public function getUser()
	{
	    return $this->belongsTo('User','user_id');
	}
}
