<?php

use App\Http\Controllers\JadwalController;
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

Route::get('/jadwal', [JadwalController::class, 'index']);

Route::get('/sewalapang', function () {
    return view('layout.app');
});
Route::get('/logout', function () {
    return view('layout.app');
});
