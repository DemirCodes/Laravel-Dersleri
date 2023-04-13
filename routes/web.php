<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\UserController;
//use App\Http\Controllers\DashboardController;
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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('about',[HomeController::class,'about'])->name('about');
Route::post('contact',[ContactController::class,'contact']);
Route::post('user',[HomeController::class,'user'])->name('user');
Route::match(['get','post'],'/support-form-controller',[SupportController::class,'support'])->name('support-form');
//Route::get('/user',[HomeController::class,'user'])->name('user');
Route::put('/users/update',[UserController::class,'update'])->name('update');
Route::patch('users/updateAll',[UserController::class,'updateAll'])->name('updateAll');
//Route::delete('users/delete',[UserController::class,'delete'])->name('delete');


Route::any('/hersey',function (){dd("Hersey geldi");});

Route::redirect('hersey','contact');
Route::get('/contact',[ContactController::class,'showForm'])->name('contact');

Route::post('/users/name',[UserController::class,'showName'])->name('showName');




