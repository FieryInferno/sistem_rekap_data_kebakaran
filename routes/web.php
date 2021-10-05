<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

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



Auth::routes();

Route::get('/', [EventController::class, 'index'])->name('home');
Route::get('/bulk_add', [EventController::class, 'bulk_create'])->name('bulk_create');
Route::post('/bulk_add', [EventController::class, 'bulk_store'])->name('bulk_store');
Route::get('/data', [EventController::class, 'bulkShow'])->name('data');
