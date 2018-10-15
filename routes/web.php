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
    return view('index');
});
Route::get('/refugees', function () {
    return view('refugees/index');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('camp','CampsController');

Route::resource('country','CountryController');

Route::resource('jobs','JobsController');

Route::resource('messages','MessagesController');

Route::resource('refugees','RefugeesController');

Route::resource('repatriation','RepatriationsController');



// Route:: patch('/jobs/{job}', 'JobsController@update');