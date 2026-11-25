
<?php

use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\Api\CourseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Student REST API Routes
Route::apiResource('courses', CourseController::class);
Route::apiResource('students', StudentController::class);
