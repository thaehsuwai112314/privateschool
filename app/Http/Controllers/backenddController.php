<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class backenddController extends Controller
{
    public function backenddfun($value=''){
    	return view('backendtemplate');
    }
}
