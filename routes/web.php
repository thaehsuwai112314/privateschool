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

 Route::resource('student','StudentController');

Route::get('contacts', 'PageController@contactfun')->name('contactpage');

Route::get('logins', 'PageController@loginfun')->name('loginpage');


Route::get('backends','PageController@backendfun');

// Route::resource('backends','BackendController');










Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::middleware('role:Admin')->group(function(){

Route::resource('teacher','TeacherController');
Route::resource('subject','SubjectController');
Route::resource('class','ClassesController');
Route::resource('timetable','TimetableController');
Route::resource('grade','GradeController');
Route::resource('academic','AcademicController');
Route::resource('payment','PaymentController');


Route::get('backends', 'backenddController@backenddfun');

});


Route::resource('examination','ExaminationController');
Route::post('studentgrade','StudentController@studentgrade')->name('studentgrade');
Route::post('teachersubject','TimetableController@teachersubject')->name('teachersubject');
Route::post('timetableclass','TimetableController@timetableclass')->name('timetableclass');
Route::post('paymentgrade','PaymentController@paymentgrade')->name('paymentgrade');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


