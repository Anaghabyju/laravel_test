<?php

use App\Http\Controllers\HomeController;
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

Route::get('/',[HomeController::class,'index']);
Route::get('/register',[HomeController::class,'register'])->name('register');
Route::get('/showlogin',[HomeController::class,'showlogin'])->name('showlogin');
Route::post('/create',[HomeController::class,'create'])->name('create');
Route::post('/login',[HomeController::class,'login'])->name('login');
Route::get('/dashboard',[HomeController::class,'dashboard'])->name('dashboard');
Route::get('/edit{id}',[HomeController::class,'edit'])->name('edit');
Route::post('/update{id}',[HomeController::class,'update'])->name('update');