<?php

use Illuminate\Support\Facades\Route;
// use  App\Http\Controllers\UserController;
// use  App\Http\Controllers\FlightController;


// use  App\Http\Middleware\AgeCheck;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('user', [UserController::class, 'users']);

// Route::view('nameurl', 'AgeCheck')->middleware(AgeCheck::class);
// Route::view('middleware', 'middleware')->middleware('check1');
// Route::view('middleware1', 'middleware1');

// Route::middleware('check1')->group(function () {
//     Route::view('m1', 'middleware');
//     Route::view('m2', 'middleware');
//     Route::view('m3', 'middleware');
//     Route::view('m4', 'middleware');
// });

// Route::get('/flight', [FlightController::class, 'index'])->name('index');
// Route::get('/create', [FlightController::class, 'create'])->name('create');
// Route::post('/flight', [FlightController::class, 'store'])->name('store');
// use  App\Http\Controllers\DbQueryBuilder;

// Route::get('querbuilder', [DbQueryBuilder::class, 'Query']);


// use App\Http\Controllers\RouteMethodExample;

// Route::get('methodexample', [RouteMethodExample::class, 'get']);
// Route::get('methodexample', [RouteMethodExample::class, 'post']);
// Route::get('methodexample', [RouteMethodExample::class, 'put']);
// Route::get('methodexample', [RouteMethodExample::class, 'delete']);

// Route::any('methodexample', [RouteMethodExample::class, 'any']);

// Route::view('form', 'RouteMethodExample');


// use App\Http\Controllers\SessionController;

Route::view('user-form', 'RequestClass');

use App\Http\Controllers\RequestClass;

Route::post('user-form2', [RequestClass::class, 'login']);
// Route::view('loginsession', 'SessionView1');
// Route::view('profilesession', 'SessionView2');
