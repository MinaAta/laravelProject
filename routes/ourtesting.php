<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\reqController;



Route::get('/',[reqController::class,'getdata']) ->name('h'); 
Route::get('/recieve',[reqController::class,'recievedata']) ; 


// ***********************************

Route::get('/storing',[reqController::class,'storing']) ; 



Route::get('/s',[reqController::class,'evnt']) ; 



// ***********************************