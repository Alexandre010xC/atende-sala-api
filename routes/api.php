<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ApiController;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/', [ApiController::class, 'index']);

// Professor Routes
Route::post('/create-class', [ApiController::class, 'createClassroom']);
Route::get('/next', [ApiController::class, 'assistNextStudent']);
Route::get('/stop', [ApiController::class, 'stopAssist']);

// Student Routes
Route::get('/class', [ApiController::class, 'searchClassroom']);
Route::post('/join', [ApiController::class, 'joinClassroom']);
Route::patch('/ask', [ApiController::class, 'askAssistance']);

// Professor/Student Route
Route::get('/exit', [ApiController::class, 'exit']);