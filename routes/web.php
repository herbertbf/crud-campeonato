<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimeController;

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


Route::get('/', [ TimeController::class, 'index'])->name('time.index');

Route::get('/form', [ TimeController::class, 'create'])->name('time.create');

Route::post('/store', [ TimeController::class, 'store'])->name('time.store');

Route::match(array('PUT', 'PATCH'), "/{id}", [TimeController::class, 'update'])->name('time.update');

Route::get('/show/{id}',  [ TimeController::class, 'show'])->name('time.show');

Route::get('/edit/{id}',  [ TimeController::class, 'edit'])->name('time.edit');

Route::delete('/destroy/{id}',  [ TimeController::class, 'destroy'])->name('time.destroy'); 
 
 
//Route::resource('time', TimeController::class);








