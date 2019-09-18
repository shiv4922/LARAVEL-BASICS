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


 
// Route::get('URL_NAME','ControllerName@METHOD NAME');

Route::get('home','shivController@raj');
Route::get('about','shivController@shiv');
Route::get('query','DbController@queryrun');
Route::get('show','DbController@showdata');
Route::get('update','DbController@updates');
Route::get('delete','DbController@delete');
Route::get('insert','EmployController@insert');
Route::get('showdata','EmployController@show');
Route::get('updatedata','EmployController@updte');
Route::get('deletedata','EmployController@delete');

