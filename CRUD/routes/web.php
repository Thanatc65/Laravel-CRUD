<?php

use App\Http\Controllers\CrudController;
use App\Http\Controllers\FixController;
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

Route::get('/', [CrudController::class,'index'])->name('home');
Route::resource('crud',CrudController::class);
Route::get('/fix/{id}',[FixController::class,'index'])->name('fix');