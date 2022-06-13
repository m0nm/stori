<?php

use App\Http\Controllers\CommentController;
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
    Route::view('/login', 'user.login')->middleware('guest');
    Route::view('/register', 'user.register')->middleware('guest');
    Route::view('/forgot-password', 'user.forgot-password')->middleware('guest');
    Route::get('/reset-password/{token}', 'showResetPassword')->middleware('guest')->name('password.reset');
    Route::get('/logout', 'logout')->middleware('auth');
    Route::get('/auth/google/redirect', 'googleRedirect');
    Route::get('/auth/google/callback', 'googleAuth');
    Route::get('/auth/github/redirect', 'githubRedirect');
    Route::get('/auth/github/callback', 'githubAuth');
    Route::post('/users', 'store')->middleware('guest');
    Route::post('/login', 'auth')->middleware('guest');
    Route::post('/forgot-password', 'forgotPassword')->middleware('guest');
    Route::post('/reset-password', 'resetPassword')->middleware('guest');
    Route::put('/users/{id}', 'update')->middleware('auth');
    Route::delete('/users/{id}', 'destroy')->middleware('auth');
});


// profile routes
Route::controller(ProfileController::class)->group(function () {
    Route::get('/settings', 'edit')->middleware('auth');
    Route::get('/authors/{username}', 'show');
    Route::put('/users/{id}/profile/update', 'update');
});


// posts route
Route::controller(PostController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/dashboard', 'dashboard')->middleware('auth');
    Route::get('/posts/create', 'create')->middleware('auth');
    Route::get('/posts/{id}', 'show');
    Route::get('/posts/{id}/edit', 'edit')->middleware('auth');
    Route::post('/posts', 'store')->name('store');
    Route::post('/posts/upload', 'upload')->name('ckeditor.upload');
    Route::post('/posts/{id}/toggleLike', 'toggleLike');
    Route::put('/posts/{id}/update', 'update');
    Route::delete('/posts/{id}', 'destroy');
});

// comment route
Route::controller(CommentController::class)->group(function () {
    Route::post('/posts/{id}/comments', 'store');
    Route::post('/comments/{id}/toggleLike', 'toggleLike');
});