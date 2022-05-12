<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// user routes
Route::get('/login', [UserController::class, 'login'])->middleware('guest');
Route::get('/register', [UserController::class, 'create'])->middleware('guest');
Route::get('/logout', [UserController::class, 'logout'])->middleware('auth');
Route::post('/users', [UserController::class, 'store']);
Route::post('/login', [UserController::class, 'auth']);



Route::view('/', 'index');
Route::view('/reset-password', 'user.reset-password');
