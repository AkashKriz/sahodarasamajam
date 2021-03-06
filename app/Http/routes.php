<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('frontend.index');

});
Auth::routes();

Route::get('/home', 'HomeController@index');
#route for members
Route::resource ('members', 'MemberController');
#route for life members
Route::resource('lifetime', 'LifeTimeController');