<?php

namespace App\Http\Controllers;
use App\Student;
use App\User;
use App\Academic;
use App\Classes;
use App\Grade;
use App\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ResultController extends Controller
{	
	public function index()
    {
         $results = Result::all();
         return view('backend.result.index',compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $students = Student::all();
        $examinations = Examination::all();
        $subjects=Subject::all();

        return view('backend.payment.create',compact('classes','academics','students','examinations','subjects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
       $request->validate([
            "marks"=>'required',
            "student_id"=>'required',
            "exam_id" => 'required',
        ]);
            $result->marks = $request->marks;
            $result->student_id = $request->student_id;
            $result->exam_id = $request->exam_id;
            
            $result->save();
        
           return redirect()->route('result.index');
    }

    public function show(Result $result)
    {
         //return view('backend.result.create',compact('result'));
    }
    public function edit(Payment $result)
    {
        $academics = Academic::all();
        $classes = Classes::all();
        $student = Subject::all();
        return view('backend.student.edit',compact('academics','classes','grades','student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
         $request->validate([
            "marks"=>'required',
            "student_id"=>'required',
            "exam_id" => 'required',
        ]);
           $result->marks = $request->marks;
            $result->student_id = $request->student_id;
            $result->exam_id = $request->exam_id;
            
            $result->save();
        
           return redirect()->route('result.index'); 
            
    }
    public function destroy(Payment $payment)
    {
        $payment->delete();
        return redirect()->route('payment.index');
    }
}
