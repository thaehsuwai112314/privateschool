<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Examination extends Model
{
     protected $fillable = [
    	  'name','result','student_id','subject_id'

    ];
}
