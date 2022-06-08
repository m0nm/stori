<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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
    Route::get('/register', 'create')->middleware('guest');
    Route::get('/logout', 'logout')->middleware('auth');
    Route::get('/auth/google/redirect', 'googleRedirect');
    Route::get('/auth/google/callback', 'googleAuth');
    Route::get('/auth/github/redirect', 'githubRedirect');
    Route::get('/auth/github/callback', 'githubAuth');
    Route::post('/users', 'store');
    Route::post('/login', 'auth');
    Route::view('/reset-password', 'user.reset-password');
    Route::put('/users/{id}', 'update');
    Route::delete('/users/{id}', 'destroy');
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