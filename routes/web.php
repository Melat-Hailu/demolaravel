<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\UserController;
use  App\Http\Controllers\FlightController;


// use  App\Http\Middleware\AgeCheck;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('user', [UserController::class, 'users']);

// Route::view('nameurl', 'AgeCheck')->middleware(AgeCheck::class);
// Route::view('middleware', 'middleware')->middleware('check1');
// Route::view('middleware1', 'middleware1');

// Route::middleware('check1')->group(function () {
//     Route::view('m1', 'middleware');
//     Route::view('m2', 'middleware');
//     Route::view('m3', 'middleware');
//     Route::view('m4', 'middleware');
// });

Route::get('/flight', [FlightController::class, 'index'])->name('index');
Route::get('/create', [FlightController::class, 'create'])->name('create');
Route::post('/flight', [FlightController::class, 'store'])->name('store');
