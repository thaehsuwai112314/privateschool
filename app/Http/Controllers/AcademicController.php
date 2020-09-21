<?php

namespace App\Http\Controllers;

use App\Academic;
use Illuminate\Http\Request;

class AcademicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $academics = Academic::all();
         return view('backend.academic.index',compact('academics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $academics = Academic::all();
       
        return view('backend.academic.create',compact('academics'));
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
            
        ]);
        

            $academic = new Academic;
            $academic->name = $request->name;
            
            $academic->save();
        
           return redirect()->route('academic.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Academic  $academic
     * @return \Illuminate\Http\Response
     */
    public function show(Academic $academic)
    {
            return view('backend.academic.detail',compact('academic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Academic  $academic
     * @return \Illuminate\Http\Response
     */
    public function edit(Academic $academic)
    {
         
        
       
        return view('backend.academic.edit',compact('academic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Academic  $academic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Academic $academic)
    {
        $request->validate([
            
            "name" => 'required',
            
        ]);
        

            
            $academic->name = $request->name;
            
            $academic->save();
        
           return redirect()->route('academic.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Academic  $academic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Academic $academic)
    {
         $academic->delete();
        return redirect()->route('academic.index');
    }
}
