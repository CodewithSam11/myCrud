<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AjaxController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('home',[HomeController::class,'index'])->name('home');
Route::post('/add',[HomeController::class,'add'])->name('add');
Route::get('delete/{id}',[HomeController::class,'destroy'])->name('delete');

// Route::view('edit','edit');
// Route::get('edit/{id}',[HomeController::class,'edit']);
Route::get('edit/{id}',[HomeController::class,'edit'])->name('edit');

Route::post('update/{id}',[HomeController::class,'update'])->name('update');
// Route::view('edit','edit');

Route::get('event',[HomeController::class,'index']);
// Route::view('edit','edit');

/// This is for Ajax Methods 
Route::view('ajax','ajax');
Route::post('form_submit','Ajax@form_submit');