<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\app\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('employee', [EmployeeController::class, 'select'])->name('employee');

Route::get('employee/create', [EmployeeController::class, 'create'])->name('employee');