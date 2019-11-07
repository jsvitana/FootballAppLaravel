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

// Tests the specific team page
Route::get('/test', function () {
    return view('specific');
});

//tests the all team page
Route::get('/test2', function () {
    return view('allTeams');
});

////// Team stats routes ///////

Route::get('/teamstats', function() {
    return view('teamstats');
});

Route::get('/teamstats/{abbr}', function() {
    return view('specific');
});

/////////////////////////////////

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user/{id}','footballapp@show');
Route::post('/post','footballapp@store');
Route::put('/update','footballapp@update');
Route::put('/removeFavTeam','footballapp@removeFavTeam');


