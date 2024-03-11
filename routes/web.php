<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\DashboardController;

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
    return redirect('/dashboard');
})->middleware('auth');

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth'); 

// Login
Route::controller(LoginController::class)->group(function(){
    Route::get('/login','index')->name('login')->middleware('guest');
    Route::get('/register','register')->name('register')->middleware('guest');
    Route::get('/donation','donation')->name('donation')->middleware('guest');
    Route::post('/login','authenticate');
    Route::post('/logout','logout');
});

// Table Master
Route::resource('/table/schools', SchoolController::class);
