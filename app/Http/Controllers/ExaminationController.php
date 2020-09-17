<?php

namespace App\Http\Controllers;

use App\Examination;
use App\Student;
use App\Subject;
use App\User;
use App\Grade;
use App\Academic;
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
        $examinations = Examination::all();
         return view('backend.examination.index',compact('examinations'));
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
        $subjects = Subject::all();
        $grades=Grade::all();
        $academics=Academic::all();
        return view('backend.examination.create',compact('students','examinations','subjects','grades','academics'));
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
            "ename" => 'required',
            "exam_month" => 'required',
            "exam_date" => 'required',
            "starttime" => 'required',
            "endtime" => 'required',
            "subject" => 'required',
            "grade" => 'required',
            "academic" => 'required',
           

        ]);
            $examination = new Examination;
            $examination->ename = $request->ename;
            $examination->exam_month = $request->exam_month;
            $examination->exam_date = $request->exam_date;
            $examination->starttime = $request->starttime;
            $examination->endtime = $request->endtime;
            $examination->subject = $request->subject;
            $examination->grade = $request->grade;
            $examination->academic = $request->academic;
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
        $grades=Grade::all();
        $academics=Grade::all();
        return view('backend.examination.edit',compact('students','examinations','subjects','grades','academics'));
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
            "ename" => 'required',
            "exam_month" => 'required',
            "exam_date" => 'required',
            "starttime" => 'required',
            "endtime" => 'required',
            "subject" => 'required',
            "grade" => 'required',
            "academic" => 'required',
           

        ]);

          
            $examination->ename = $request->ename;
            $examination->exam_month = $request->exam_month;
            $examination->exam_date = $request->exam_date;
            $examination->starttime = $request->starttime;
            $examination->endtime = $request->endtime;
            $examination->subject = $request->subject;
            $examination->grade = $request->grade;
            $examination->academic = $request->academic;
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
