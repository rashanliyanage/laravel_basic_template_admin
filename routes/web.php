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
    return view('auth.login');
});

    Route::get('/', 'DashboardController@index')->name('dashboard');





// Excel  TO BE DISCARDED
Route::get('export-file/{type}', 'ExcelController@exportFile')->name('export.file');

Auth::routes();

// Deafult route
//Route::get('/home', 'HomeController@index')->name('home');
