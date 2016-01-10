<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
   	protected $fillable = array('id', 'name', 'content');

   	public function getAuthor()
    {
        return $this->belongsTo('User','user_id');
    }

    /*public function getReaders()
    {
        return $this->belongsToMany('User','blogreaders','blogid','readerid');
    }*/
}
