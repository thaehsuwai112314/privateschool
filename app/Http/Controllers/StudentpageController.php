<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Student;
use Auth;

class StudentpageController extends Controller
{
	// public function studentpasswordfun($value=''){
     public function studentpasswordfun(Request $request){
    	// $student= Student::where('id',$id)->first();
    	$id=Auth::user()->id;
     	$user=User::find($id);

     	// $student= Student::where('id',$id)->first();
     	
     	// dd($user);
        // $user->password = bcrypt($request->password);
        // $user->save();

         // return back();


    		  return view('backend.Student_role.studentpassword',compact('user'));
    	}
    	public function studentpasschange(Request $request)
    	{
    		$id=Auth::user()->id;
    		$user=User::find($id);
    		$user->password = bcrypt($request->password);
        	$user->save();
        	return back();
    	}
}
