<?php

use App\Http\Controllers\Api\{
    CourseController,
    ModuleController,
    LessonController,
};

use Illuminate\Support\Facades\Route;

//Courses
Route::get('courses',[CourseController::class, 'index']);
Route::get('courses/{id}',[CourseController::class, 'show']);

//Modulos dos Cursos
Route::get('courses/{id}/modules',[ModuleController::class, 'index']);

//Modulos das Aulas
Route::get('modules/{id}/lessons',[LessonController::class, 'index']);
Route::get('lessons/{id}',[LessonController::class, 'show']);

Route::get('/', function() {
    return response()->json([
        'success' => true,
    ]);
});
