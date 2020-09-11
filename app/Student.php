<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
     protected $fillable = [
    	'enrollno','email','photo', 'address','dob', 'fname','payment','class'

    ];

     public function subject($value='')
    {
    	return $this->belongsToMany('App\Subject');
    }
     public function teacher($value='')
    {
    	return $this->hasMany('App\Teacher');
    }
     
}
