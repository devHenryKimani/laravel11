<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
 
Route::get('/', [IndexController::class, 'index']);
Route::get('/hello',[IndexController::class, 'show']);

Route::resource('listing',ListingController::class);

Route::resource('student',StudentController::class);

