<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category-add', [CategoryController::class, 'add']);
Route::post('/category-add', [CategoryController::class, 'store']);
Route::get('/category-edit/{id}', [CategoryController::class, 'edit']);
Route::put('/category-update/{id}', [CategoryController::class, 'update']);
Route::get('/category-delete/{id}', [CategoryController::class, 'delete']);
