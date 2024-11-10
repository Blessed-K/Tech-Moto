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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/employees',[App\Http\Controllers\EmployeeController::class,'index'])->name('employees.index');
Route::get('/applications',[App\Http\Controllers\ApplicationController::class,'applications'])->name('new.applications');
Route::get('/apply',[App\Http\Controllers\ApplicationController::class,'apply'])->name('apply');
Route::post('/apply/create',[App\Http\Controllers\ApplicationController::class,'create'])->name('apply.create');
Route::get('/apply/delete/{id}',[App\Http\Controllers\ApplicationController::class,'delete'])->name('apply.delete');
Route::get('shift-data/{id}',[App\Http\Controllers\ApplicationController::class,'shiftdata'])->name('shiftdata');
Route::get('employee/delete/{id}',[App\Http\Controllers\EmployeeController::class,'delete'])->name('employee.delete');