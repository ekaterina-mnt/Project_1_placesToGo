<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PlaceController;

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

Route::get('/', function () {
    return view('main');
});

Route::get('/register', [RegisterController::class, 'form']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/logout', [LogoutController::class, 'logout']);
Route::get('/login', [LoginController::class, 'form']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/ideas', function () {
    return view('ideas');
});

Route::get('/places/want', [PlaceController::class, 'want']);
Route::get('/places/was', [PlaceController::class, 'was']);

Route::get('/places/add', [PlaceController::class, 'add']);
Route::post('/places/add', [PlaceController::class, 'store']);

Route::post('/places/move/{id}', [PlaceController::class, 'move']);
Route::post('/places/return/{id}', [PlaceController::class, 'return']);
Route::delete('/places/delete/{id}', [PlaceController::class, 'delete']);

Route::get('/profile', [ProfileController::class, 'show']);
Route::get('/profile/edit', [ProfileController::class, 'edit']);
Route::post('/profile/edit', [ProfileController::class, 'update']);
Route::delete('/profile/photo/delete/{id}', [ProfileController::class, 'photo_delete']);