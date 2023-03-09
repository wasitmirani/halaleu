<?php

use App\Http\Controllers\FrontEndController;
use Illuminate\Support\Facades\Route;

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



Route::get('/',[FrontEndController::class,'index'])->name('home');
Route::get('/about',[FrontEndController::class,'about'])->name('about');
Route::get('/halal',[FrontEndController::class,'halal'])->name('halal');
Route::get('/services',[FrontEndController::class,'services'])->name('services');
Route::get('/blogs',[FrontEndController::class,'blogs'])->name('blogs');
Route::get('/contact',[FrontEndController::class,'contact'])->name('contact');



