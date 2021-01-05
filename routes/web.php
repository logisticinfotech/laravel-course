<?php

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


Auth::routes();

Route::get('/', [App\Http\Controllers\EmployeeController::class, 'index'])->name('home');

Route::get('/employees-list', [App\Http\Controllers\EmployeeController::class, 'getEmployee'])->name('employees-list');
Route::resource('employee',App\Http\Controllers\EmployeeController::class);
