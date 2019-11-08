<?php

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
    return view('welcome');
});


////// Team stats routes ///////

Route::get('/teamscores', function () {
    return view('allTeams');
});

/*Route::get('/teamstats', function() {     //Do not need this route, delete later
    return view('specific');
});*/

Route::get('/teamstats/{num}', function($num) {
    return view('specific', compact('num'));
});

/////////////////////////////////

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user/{id}','footballapp@show');
Route::post('/post','footballapp@store');
Route::put('/update','footballapp@update');
Route::put('/removeFavTeam','footballapp@removeFavTeam');


