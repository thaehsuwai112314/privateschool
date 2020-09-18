<?php

namespace App\Http\Controllers;

use App\Examination;
use App\Student;
use App\Subject;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class ExaminationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exam = Exam::all();
         return view('backend.exam.index',compact('exam'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $students = Student::all();
        $exam = Exam::all();
        $subjects = Subject::all();
        return view('backend.exam.create',compact('students','exam','subjects'));
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
            
            "name" => 'required',
            "ename" => 'required',
            "result" => 'required',
            "subject" => 'required',
           

        ]);
        
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password =Hash::make('123456789');     
            $user->save();
            $id=$user->id;

            $examination = new Examination;
            $examination->ename = $request->ename;
            $examination->result = $request->result;
            $examination->subject = $request->subject;
            $examination->save();
        
           return redirect()->route('examination.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Examination  $examination
     * @return \Illuminate\Http\Response
     */
    public function show(Examination $examination)
    {
         return view('backend.examination.detail',compact('examination'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Examination  $examination
     * @return \Illuminate\Http\Response
     */
    public function edit(Examination $examination)
    {
        $students = Student::all();
        $examinations = Examination::all();
        $subjects = Subject::all();
        return view('backend.examination.edit',compact('students','examinations','subjects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Examination  $examination
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Examination $examination)
    {
        $request->validate([
            
            "name" => 'required',
            "ename" => 'required',
            "result" => 'required',
            "subject" => 'required',
           

        ]);
        
            $user_id=$request->user_id;
            $user=User::find($user_id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password =Hash::make('123456789');     
            $user->save();
            $id=$user->id;

          
            $examination->ename = $request->ename;
            $examination->result = $request->result;
            $examination->subject = $request->subject;
            $examination->save();
        
           return redirect()->route('examination.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Examination  $examination
     * @return \Illuminate\Http\Response
     */
    public function destroy(Examination $examination)
    {
          $examination->delete();
        return redirect()->route('examination.index');
    }
}
