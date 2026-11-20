
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;

Route::get('/', function () {
    return redirect('/students');
});

// ================= STUDENTS =================

Route::resource('students', StudentController::class);

// ================= COURSES =================

Route::resource('courses', CourseController::class);
