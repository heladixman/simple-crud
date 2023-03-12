<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RekeningTypeController;
use App\Http\Controllers\RekeningController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ReportTypeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PasswordResetController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UsersController;
use App\Http\Middleware\Authenticate;

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
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/reset-password', [PasswordResetController::class, 'index']);
Route::post('/reset-password', [PasswordResetController::class, 'passwordReset'])->middleware('guest')->name('password.reset');

Route::get('/profile', [CategoryController::class, 'index'])->middleware('auth');
Route::post('/new-profile', [CategoryController::class, 'store']);
Route::patch('/update-profile', [CategoryController::class, 'update']);
Route::delete('/delete-profile', [CategoryController::class, 'delete']);

Route::get('/category', [CategoryController::class, 'index'])->middleware('auth');
Route::post('/new-category', [CategoryController::class, 'store']);
Route::patch('/update-category', [CategoryController::class, 'update']);
Route::delete('/delete-category', [CategoryController::class, 'delete']);

Route::get('/report-type', [ReportTypeController::class, 'index'])->middleware('auth');
Route::post('/new-report-type', [ReportTypeController::class, 'store']);
Route::patch('/update-report-type', [ReportTypeController::class, 'update']);
Route::delete('/delete-report-type', [ReportTypeController::class, 'delete']);

Route::get('/rekening-type', [RekeningTypeController::class, 'index'])->middleware('auth');
Route::post('/new-rekening-type', [RekeningTypeController::class, 'store']);
Route::patch('/update-rekening-type', [RekeningTypeController::class, 'update']);
Route::delete('/delete-rekening-type', [RekeningTypeController::class, 'delete']);

Route::get('/rekening', [RekeningController::class, 'index'])->middleware('auth');
Route::post('/new-rekening', [RekeningController::class, 'store']);
Route::patch('/update-rekening', [RekeningController::class, 'update']);
Route::delete('/delete-rekening', [RekeningController::class, 'delete']);

Route::get('/contact', [ContactController::class, 'index'])->middleware('auth');
Route::post('/new-contact', [ContactController::class, 'store']);
Route::patch('/update-contact', [ContactController::class, 'update']);
Route::delete('/delete-contact', [ContactController::class, 'delete']);

Route::resource('user', UsersController::class)->middleware('auth');

Route::get('/report', [ReportController::class, 'index'])->middleware('auth');
Route::post('/new-report', [ReportController::class, 'store']);
Route::patch('/update-report', [ReportController::class, 'update']);
Route::delete('/delete-contact', [ReportController::class, 'delete']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');