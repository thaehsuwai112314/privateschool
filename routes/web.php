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

// Route::get('teacherhomes', 'PageController@teacherhomefun')->name('teacherhomepage');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::middleware('role:Admin')->group(function(){

Route::resource('teacher','TeacherController');
Route::resource('subject','SubjectController');
Route::resource('class','ClassesController');
Route::resource('timetable','TimetableController');
Route::resource('grade','GradeController');
Route::resource('academic','AcademicController');

Route::resource('examination','ExaminationController');

Route::resource('payment','PaymentController');

Route::get('backends', 'backenddController@backenddfun');

});

Route::middleware('role:Teacher')->group(function(){

Route::get('teacherhomes', 'TeacherPageController@teacherhomefun')->name('teacherhomepage');
Route::get('teacherdetails/{id}', 'TeacherPageController@teacherdetailfun')->name('teacherdetailpage');
Route::get('studenthomes', 'TeacherPageController@studenthomefun')->name('studenthomepage');
Route::get('studentdetails/{id}', 'TeacherPageController@studentdetailfun')->name('studentdetailpage');


});




Route::post('studentgrade','StudentController@studentgrade')->name('studentgrade');
Route::post('teachersubject','TimetableController@teachersubject')->name('teachersubject');
Route::post('timetableclass','TimetableController@timetableclass')->name('timetableclass');
Route::post('paymentgrade','PaymentController@paymentgrade')->name('paymentgrade');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


