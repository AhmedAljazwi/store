<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartItemController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/login', [UserController::class, 'login']);
Route::post('/login', [UserController::class, 'check']);
Route::get('/logout', [UserController::class, 'logout']);
Route::get('/cart/{id}', [CartItemController::class, 'add']);

Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category-add', [CategoryController::class, 'add']);
Route::post('/category-add', [CategoryController::class, 'store']);
Route::get('/category-edit/{id}', [CategoryController::class, 'edit']);
Route::put('/category-update/{id}', [CategoryController::class, 'update']);
Route::get('/category-delete/{id}', [CategoryController::class, 'delete']);

Route::get('/bill', [BillController::class, 'index']);
Route::get('/bill-add', [BillController::class, 'add']);
Route::post('/bill-add', [BillController::class, 'store']);
Route::get('/bill-edit/{id}', [BillController::class, 'edit']);
Route::put('/bill-update/{id}', [BillController::class, 'update']);
Route::get('/bill-delete/{id}', [BillController::class, 'delete']);

Route::get('/inventory', [InventoryController::class, 'index'])->middleware('isAdmin');
Route::get('/inventory-add', [InventoryController::class, 'add'])->middleware('isAdmin');
Route::post('/inventory-add', [InventoryController::class, 'store'])->middleware('isAdmin');
Route::get('/inventory-edit/{id}', [InventoryController::class, 'edit'])->middleware('isAdmin');
Route::put('/inventory-update/{id}', [InventoryController::class, 'update'])->middleware('isAdmin');
Route::get('/inventory-delete/{id}', [InventoryController::class, 'delete'])->middleware('isAdmin');

Route::get('/order', [OrderController::class, 'index']);
Route::get('/order-add', [OrderController::class, 'add']);
Route::post('/order-add', [OrderController::class, 'store']);
Route::get('/order-edit/{id}', [OrderController::class, 'edit']);
Route::put('/order-update/{id}', [OrderController::class, 'update']);
Route::get('/order-delete/{id}', [OrderController::class, 'delete']);

Route::get('/product', [ProductController::class, 'index'])->middleware('isAdmin');
Route::get('/product-add', [ProductController::class, 'add'])->middleware('isAdmin');
Route::post('/product-add', [ProductController::class, 'store'])->middleware('isAdmin');
Route::get('/product-edit/{id}', [ProductController::class, 'edit'])->middleware('isAdmin');
Route::put('/product-update/{id}', [ProductController::class, 'update'])->middleware('isAdmin');
Route::get('/product-delete/{id}', [ProductController::class, 'delete'])->middleware('isAdmin');

Route::get('/user', [UserController::class, 'index'])->middleware('isAdmin');
Route::get('/user-add', [UserController::class, 'add']);
Route::post('/user-add', [UserController::class, 'store']);
Route::get('/user-edit/{id}', [UserController::class, 'edit'])->middleware('isAdmin');
Route::put('/user-update/{id}', [UserController::class, 'update'])->middleware('isAdmin');
Route::get('/user-delete/{id}', [UserController::class, 'delete'])->middleware('isAdmin');

Route::get('/test', function() {
    return view('test');
});

Route::post('/test', function(Request $request) {
    return $request;
});