<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\StudentClassController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Admin\ShiftController;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Admin\AssignSubjectController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::resource('home',HomeController::class);
Route::resource('admin',AdminController::class);
Route::resource('users',UserController::class);
Route::resource('clases',StudentClassController::class);
Route::resource('groups',GroupController::class);
Route::resource('shifts',ShiftController::class);
Route::resource('subjects',SubjectController::class);
Route::resource('assign_subjects',AssignSubjectController::class);