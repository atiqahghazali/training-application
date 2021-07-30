<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PointsController;

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
    return view('draw_map');
});

Route::get('/addpoint', [PointsController::class, 'add_location'])->name('add_point');