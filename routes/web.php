<?php

use Illuminate\Support\Facades\Route;
// 1. Import your Controller at the top
use App\Http\Controllers\StudentController;

Route::get('/', [App\Http\Controllers\StudentController::class, 'index']);

// 2. Add this single line for all Student CRUD operations
Route::resource('students', StudentController::class);