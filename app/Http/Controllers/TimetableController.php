<?php

namespace App\Http\Controllers;

use App\Student;
use App\User;
use App\Academic;
use App\Classes;
use App\Grade;
use App\Subject;
use App\Timetable;
use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class TimetableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $timetables = Timetable::all();
         return view('backend.timetable.index',compact('timetables'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $academics = Academic::all();
        $classes = Classes::all();
        $grades = Grade::all();
        $subjects = Subject::all();
         $timetables = Timetable::all();
         $teachers = Teacher::all();
        return view('backend.timetable.create',compact('timetables','academics','classes','grades','subjects','teachers'));
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
            
            "day" => 'required',
            "starttime" => 'required',
            "endtime" => 'required',
            "class" => 'required',
            "subject" => 'required',
            "academic" => 'required',
            "name" => 'required'
           

        ]);
        
            

            $timetable = new Timetable;
            $timetable->day = $request->day;
            $timetable->starttime = $request->starttime;
            $timetable->endtime = $request->endtime;
            $timetable->class_id= $request->class;
            $timetable->subject_id= $request->subject;
            $timetable->academic_id= $request->academic;
            $timetable->teacher_id= $request->name;
            $timetable->save();
        
           return redirect()->route('timetable.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Timetable  $timetable
     * @return \Illuminate\Http\Response
     */
    public function show(Timetable $timetable)
    {
         return view('backend.timetable.detail',compact('timetable'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Timetable  $timetable
     * @return \Illuminate\Http\Response
     */
    public function edit(Timetable $timetable)
    {
         $academics = Academic::all();
        $classes = Classes::all();
        $grades = Grade::all();
        $subjects = Subject::all();
        $timetables = Timetable::all();
        $teachers = Teacher::all();

        return view('backend.student.edit',compact('academics','classes','grades','subjects','student','timetables','teachers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Timetable  $timetable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Timetable $timetable)
    {
       $request->validate([
            
            "day" => 'required',
            "starttime" => 'required',
            "endtime" => 'required',
           

        ]);
        
            

            $timetable->day = $request->day;
            $timetable->starttime = $request->starttime;
            $timetable->endtime = $request->endtime;
            $timetable->save();
        
           return redirect()->route('timetable.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Timetable  $timetable
     * @return \Illuminate\Http\Response
     */
    public function destroy(Timetable $timetable)
    {
       $timetable->delete();
        return redirect()->route('timetable.index');
    }
     public function teachersubject(Request $request)
    {
       $id=$request->subject;
       //dd($id);
       $teacher=Teacher::where('subject_id',$id)->get();
       //dd($class);
       return $teacher;
       
    }
}
