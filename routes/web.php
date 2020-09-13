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




Route::get('/', 'PageController@indexfun')->name('mainpage');

// Route::resource('students','StudentController');


Route::get('contacts', 'PageController@contactfun')->name('contactpage');


//Route::get('backends','PageController@backendfun');

Route::resource('backends','Backend/BackendController');









Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('teacher','TeacherController');
Route::resource('subject','SubjectController');
Route::resource('class','ClassesController');
Route::resource('timetable','TimetableController');
Route::resource('grade','GradeController');
<<<<<<< HEAD
Route::resource('examination','ExaminationController');
Route::post('studentgrade','StudentController@studentgrade')->name('studentgrade');
Route::post('teachersubject','TimetableController@teachersubject')->name('teachersubject');
=======
>>>>>>> 6ee6383bb9f40427dd5b217aba43c6cf03ca43c4
