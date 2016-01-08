<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
   	protected $fillable = array('id', 'name', 'content');

   	public function employee(){
	    return $this->belongsTo('Employees');
	}
}
