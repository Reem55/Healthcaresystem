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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('patient/home', 'HomeController@index')->name('home');
Route::get('patient/index', 'PatientController@index')->name('patient.index');
Route::get('patient/edit', 'PatientController@edit')->name('patient.edit');
Route::put('patient/update', 'PatientController@update')->name('patient.update');
