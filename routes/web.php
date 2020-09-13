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

// Route::get('/', function () {
//     return view('frontend.index');
//     //return 'Hello Laravel';
//     //edit by Thae Hsu Wai
// });

// Route::get('contact', function () {
//     return view('frontend.contact_us');
// });

Route::get('/', 'PageController@indexfun')->name('mainpage');

Route::get('contacts', 'PageController@contactfun')->name('contactpage');


Route::get('backends','PageController@backendfun');








Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
