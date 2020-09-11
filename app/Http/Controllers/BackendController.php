<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

<<<<<<< HEAD:app/Http/Controllers/FrontendpageController.php
class FrontendpageController extends Controller
=======
class BackendController extends Controller
>>>>>>> 96ffe81e28877ea30b442453ae656969974b1deb:app/Http/Controllers/BackendController.php
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD:app/Http/Controllers/FrontendpageController.php
        //return 'This is computer student page';
       return view('frontend.index');
=======
        return view('backendtemplate');
>>>>>>> 96ffe81e28877ea30b442453ae656969974b1deb:app/Http/Controllers/BackendController.php
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
