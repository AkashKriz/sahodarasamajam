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
Route::get ('/register','RegistrationController@register');
Route::post('/register','RegistrationController@postRegister');
Route::get('/login' , 'LoginController@login');
Route::post('/login','LoginController@postLogin');
Route::post('/logout','LoginController@logout');
Route::get('/earnings','AdminController@earnings')-> middleware('admin');

#route for members
Route::resource('/members','MemberController');
#route for life time members
Route::resource('/lifetime', 'LifeTimeController');

Route::resource('/party','PartyController');
Route::get('/home', 'HomeController@index');

