<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;


//random throttle numbers 
Route::middleware('throttle:100,1')->group(function () {
    Route::get('courses', [CourseController::class, 'index']);
    Route::get('courses/{id}', [CourseController::class, 'show']);
    Route::post('courses', [CourseController::class, 'store']);
    Route::put('courses/{id}', [CourseController::class, 'update']);
    Route::delete('courses/{id}', [CourseController::class, 'destroy']);
});
