<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\groupsController;
use App\Http\Controllers\studentsController;
use App\Http\Controllers\teachersController;
use App\Http\Controllers\subjectsController;

Route::get('/', function () {return view('index');});
Route::resource('groups', groupsController::class);
Route::resource('students', studentsController::class);
Route::resource('teachers', teachersController::class);
Route::resource('subjects', subjectsController::class);
