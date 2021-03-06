<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [AuthController::class, 'loginGet'])->name('loginGet');
Route::post('/login/post', [AuthController::class, 'loginPost'])->name('loginPost');
Route::get('/signup', [AuthController::class, 'signUpGet'])->name('signUpGet');
Route::post('/signup/post', [AuthController::class, 'signUpPost'])->name('signUpPost');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('adminDashboard');
Route::post('/createCategory', [AdminController::class, 'createCategory'])->name('createCategory');
Route::post('/createProduct', [AdminController::class, 'createProduct'])->name('createProduct');
