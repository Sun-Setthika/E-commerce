<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\ProductSizeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\CustomerInfoController;
use App\Http\Controllers\ShippingMethodController;
use App\Http\Controllers\DiscountController;
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

Route::get('/carts/all',  [CartController::class, 'index']);
Route::post('/carts', [CartController::class, 'store']);
Route::get('/carts/latest-cart-id',  [CartController::class, 'getLatestCartId']);

Route::post('/carts/customerInfo', [CustomerInfoController::class, 'store']);
Route::get('/carts/customerInfo/lastest-address-id', [CustomerInfoController::class, 'getLatestAddressId']);

Route::get('/carts/customerInfo/shippingMethods', [ShippingMethodController::class, 'index']);

Route::get('/carts/customerInfo/shippingMethods/discount-code', [DiscountController::class, 'index']);

Route::post('/orderdetails', [OrderDetailController::class, 'store']);
Route::post('/orderdetails/all', [OrderDetailController::class, 'index']);
