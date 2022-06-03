<?php

use App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/login', [AuthController::class, 'loginGet'])->name('loginGet');
Route::post('/login/post', [AuthController::class, 'loginGet'])->name('loginPost');
Route::get('/signup', [AuthController::class, 'signUpGet'])->name('signUpGet');
Route::post('/signup/post', [AuthController::class, 'signUpPost'])->name('signUpPost');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
