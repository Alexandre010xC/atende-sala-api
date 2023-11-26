<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Cors;

use App\Http\Controllers\ApiController;

Route::middleware(['Cors'])->group(function () {
    // Professor Routes
    Route::post('/create-class', [ApiController::class, 'createClassroom']);
    Route::patch('/next', [ApiController::class, 'assistNextStudent']);
    Route::patch('/stop', [ApiController::class, 'stopAssist']);

    // Student Routes
    Route::get('/class', [ApiController::class, 'searchClassroom']);
    Route::post('/join', [ApiController::class, 'joinClassroom']);
    Route::patch('/ask', [ApiController::class, 'askAssistance']);

    // Professor/Student Route
    Route::post('/user', [ApiController::class, 'manageUser']);
    Route::get('/update', [ApiController::class, 'updateStatus']);
    Route::get('/exit', [ApiController::class, 'exitClassroom']);

    // Any
    Route::get('/reports', [ApiController::class, 'listReports']);
    Route::get('/report', [ApiController::class, 'getReport']);
});
