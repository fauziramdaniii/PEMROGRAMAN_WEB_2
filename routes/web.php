<?php

use App\Http\Controllers\GoogleController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\LapangController;
use App\Http\Controllers\SewaController;
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
    return view('layout.container');
});

Route::resource('/jadwal', JadwalController::class);
Route::resource('/lapang', LapangController::class);
Route::resource('/sewa', SewaController::class);
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);
// Route::middleware(['auth:sanctum', 'verified'])->get('/jadwal', function () {
//     return view('jadwal.index');
// })->name('jadwal');
