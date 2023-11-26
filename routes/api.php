<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ApiController;

// Professor Routes
Route::post('/create-class', [ApiController::class, 'createClassroom']);
Route::get('/next', [ApiController::class, 'assistNextStudent']);
Route::get('/stop', [ApiController::class, 'stopAssist']);

// Student Routes
Route::get('/class', [ApiController::class, 'searchClassroom']);
Route::post('/join', [ApiController::class, 'joinClassroom']);
Route::patch('/ask', [ApiController::class, 'askAssistance']);

// Professor/Student Route
Route::post('/create-user', [ApiController::class, 'createUser']);
Route::get('/update', [ApiController::class, 'updateStatus']);
Route::get('/exit', [ApiController::class, 'exitClassroom']);

// Any
// Route::get('/reports', [ApiController::class, 'listReports']);
// Route::get('/report', [ApiController::class, 'getReport']);
