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





Route::get('/', [App\Http\Controllers\ProfileController::class, 'index']);
Route::get('/tambah', [App\Http\Controllers\ProfileController::class, 'view_create']);
Route::post('/tambah', [App\Http\Controllers\ProfileController::class, 'create_profil']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
