<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clicks', [\App\Http\Controllers\ClickerController::class, 'index']);
Route::get('/clicks/{clicker}', [\App\Http\Controllers\ClickerController::class, 'show']);

Route::get('/clickscreate/post', [\App\Http\Controllers\ClickerController::class, 'create']); 
Route::post('/clickscreate/post', [\App\Http\Controllers\ClickerController::class, 'store']); 
Route::get('/clicks/{clicker}/edit', [\App\Http\Controllers\ClickerController::class, 'edit']); 
Route::put('/clicks/{clicker}/edit', [\App\Http\Controllers\ClickerController::class, 'update']); 
Route::delete('/clicks/{clicker}', [\App\Http\Controllers\ClickerController::class, 'destroy']); 