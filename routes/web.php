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


/******************** HomeController Start  ****************/
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::post('/user',[HomeController::class,'user'])->name('user');
/******************** HomeController End  ****************/


/******************** ContactController Start  ****************/
Route::prefix('contact')->group(function (){
    Route::get('/contact',[ContactController::class,'showForm'])->name('contact');
    Route::post('/contact',[ContactController::class,'contact']);
});
/******************** ContactController End  ****************/


/******************** UserController Start  ****************/
Route::prefix('users')->group(function (){
        Route::delete('delete',[UserController::class,'delete'])->name('delete');
        Route::put('/update',[UserController::class,'update'])->name('update');
        Route::patch('/updateAll',[UserController::class,'updateAll'])->name('updateAll');
        Route::post('/name',[UserController::class,'nameShow'])->name('nameShow');
});
/******************** UserController End  ****************/

/******************** UserController Start  ****************/
Route::prefix('support')->group(function (){
    Route::match(['get','post'],'/support-form-controller',[SupportController::class,'support'])->name('support-form');
});
/******************** UserController End  ****************/



//Route::get('/user',[HomeController::class,'user'])->name('user');
//Route::redirect('hersey','contact');
//Route::any('/hersey',function (){dd("Hersey geldi");});








//Route::get('url ', [Pontroller::class,'asd'])->whereIn('role',['admin','user']);
/*
 * Where in logi,n statü süiçin kullanılabilir bir fonsksiyon/komut
 * */
