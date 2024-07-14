<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dosomething',[TasksController::class,'doSomething']);
// Route::get('/tasks',[TasksController::class,'index']);
// Route::get('/tasks/{task}',[TasksController::class,'show']);

Route::resource('/tasks',TasksController::class);
