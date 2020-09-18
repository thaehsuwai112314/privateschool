<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\User;
use App\Subject;
use App\Student;
use App\Academic;
use App\Grade;
use App\Classes;
class TeacherPageController extends Controller
{
     public function teacherhomefun($value=''){
     	 $teachers=Teacher::all();

    	return view('backend.Teacher_role.teachermain',compact('teachers'));
    }
     public function teacherdetailfun($id){
     	
     	$teacher=Teacher::find($id);
    	return view('backend.Teacher_role.teacherdetail',compact('teacher'));
    }
   
   public function studenthomefun($value=''){
     	
     	$students=Student::all();
    	return view('backend.Teacher_role.studentmain',compact('students'));
    }
    public function studentdetailfun($id){
     	
     	$student=Student::find($id);
    	return view('backend.Teacher_role.studentdetail',compact('student'));
    }
}
