<?php

use App\Http\Controllers\Api\{
    CourseController
};
use Illuminate\Support\Facades\Route;

//Courses
Route::get('courses',[CourseController::class, 'index']);

Route::get('/', function() {
    return response()->json([
        'success' => true,
    ]);
});
