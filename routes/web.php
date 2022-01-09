<?php

use App\Http\Controllers\JadwalController;
use App\Http\Controllers\LapangController;
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

Route::get('/home', function () {
    return view('layout.app');
});

Route::resource('/jadwal', JadwalController::class);
Route::resource('/lapang', LapangController::class);
