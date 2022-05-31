<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
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
Route::controller(UserController::class)->group(function () {
    Route::get('/login', 'login')->middleware('guest');
    Route::get('/register',  'create')->middleware('guest');
    Route::get('/logout', 'logout')->middleware('auth');
    Route::get('/users/{id}', 'show');
    Route::post('/users', 'store');
    Route::post('/login', 'auth');
    Route::view('/reset-password', 'user.reset-password');
    Route::put('/users/{id}', 'update');
    Route::delete('/users/{id}', 'destroy');
});


// profile routes
Route::get('/settings', [ProfileController::class, 'edit'])->middleware('auth');
Route::put('/users/{id}/profile/update', [ProfileController::class, 'update']);


// posts route
Route::controller(PostController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/dashboard', 'dashboard')->middleware('auth');
    Route::delete('/posts/{id}', 'destroy');
});