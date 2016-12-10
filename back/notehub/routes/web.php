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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'NoteHubController@index');
// Route::get('/login', 'NoteHubController@login');
Route::get('/login_2', 'NoteHubController@login_2');
// Route::get('/channel', 'NoteHubController@channel');

Auth::routes();

// Route::post('/register', function()
// {
//     $rules['email'] = ['email', 'regex:/(.*)g\.ecc\.u-tokyo\.ac\.jp$/i'];
//
//     $validator = Validator::make(Input::all(), $rules);
//
//     if ($validator->fails())
//     {
//         return redirect('/register')->withErrors($validator);
//     }
// });

Route::get('/home', 'NoteHubController@channel');
Route::get('/yuukikagaku', 'NoteHubController@yuukikagaku');
