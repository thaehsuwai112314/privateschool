<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    return 'Hello Laravel';//edit by Thae Hsu Wai
});

Route::resource('student','StudentController');//edit by KaiZar Hein

Route::resource('studentone','StudentController');//edit by KhunKyawMinHtun