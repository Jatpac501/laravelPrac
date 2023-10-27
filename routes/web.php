<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\groupsController;

Route::get('/', function () {return view('index');});
Route::resource('groups', groupsController::class);
Route::resource('teachers', teachersController::class);
Route::resource('students', studentsController::class);
Route::resource('subjects', subjectsController::class);
