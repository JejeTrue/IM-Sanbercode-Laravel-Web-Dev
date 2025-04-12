<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\GenreController;

Route::get('/', [DashboardController::class, 'home']);
Route::get('/register', [FormController::class, 'form']);
Route::post('/welcome', [FormController::class, 'welcome']);

// create data
Route::get('/genre/create', [GenreController::class, 'create']);
Route::post('/genre', [GenreController::class, 'store']);

//read data
Route::get('/genre', [GenreController::class, 'index']);
Route::get('/genre/{id}', [GenreController::class, 'show']);

//update data
Route::get('/genre/{id}/edit', [GenreController::class, 'edit']);
Route::put('/genre/{id}', [GenreController::class, 'update']);

//delete data
Route::delete('/genre/{id}', [GenreController::class, 'destroy']);

