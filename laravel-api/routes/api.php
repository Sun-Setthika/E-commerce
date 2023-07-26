<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\ProductSizeController;
use App\Http\Controllers\CartController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/products', [ProductController::class, 'index']);
// Route::post('/purchase', [UserController::class, 'purchase']);
Route::get('/productcategories', [ProductCategoryController::class, 'index']);
Route::get('/productcategories/{id}', [ProductCategoryController::class, 'show']);

Route::post('/productcategories', [ProductCategoryController::class, 'store']);
Route::put('/productcategories/{id}', [ProductCategoryController::class, 'update']);
Route::delete('/productcategories/{id}', [ProductCategoryController::class, 'destroy']);


Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'show']);
Route::get('/products/categories/{id}', [ProductController::class, 'categorize']);

Route::post('/products', [ProductController::class, 'store']);
Route::put('/products/{id}', [ProductController::class, 'update']);
Route::delete('/products/{id}', [ProductController::class, 'destroy']);

Route::get('/size/products', [ProductSizeController::class, 'index']);
Route::post('size/products', [ProductSizeController::class, 'store']);


Route::get('/products/colors', [ColorController::class, 'index']);
Route::post('/products/colors', [ColorController::class, 'store']);
Route::delete('/products/colors/{id}', [ColorController::class, 'destroy']);

Route::post('/carts', [CartController::class, 'store']);
