<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FullCalenderEventMasterController;
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

//fullcalender
Route::get('/fullcalendareventmaster','App\Http\Controllers\FullCalendarEventMasterController@index');
Route::post('/fullcalendareventmaster/create','App\Http\Controllers\FullCalendarEventMasterController@create');
Route::post('/fullcalendareventmaster/update','App\Http\Controllers\FullCalendarEventMasterController@update');
Route::post('/fullcalendareventmaster/delete','App\Http\Controllers\FullCalendarEventMasterController@destroy');
