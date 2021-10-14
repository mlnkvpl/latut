<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DiscountController;
use App\Models\Shop\Category;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/test', function () {
    echo 'test';
});

################# Category ############################
#
// get method category form 
Route::get('/category', function () {
    return view('wip.category.form');
});

Route::post('/category', [CategoryController::class, 'store']);

Route::get('/categories', [CategoryController::class, 'view']);
Route::get('/category/edit/{id}', [CategoryController::class, 'edit']);
Route::post('/category/edit', [CategoryController::class, 'update']);
Route::get('/category/delete/{id}', [CategoryController::class, 'delete']);


################# Product ########################

// get method product form 
Route::get('/product/create', function () {
    return view('wip.product.create_form', ['categories' => Category::all()]);
});


// create product 
Route::post('/product/create', [ProductController::class, 'create']);

// edit product
Route::get('/product/edit/{product}', [ProductController::class, 'edit']);
// update product
Route::post('/product/edit/{product}', [ProductController::class, 'update']);

// delete product
Route::get('/product/destroy/{product}', [ProductController::class, 'destroy']);

// index product
Route::get('/product', [ProductController::class, 'index']);


############### Discount ############################

// get method discount form 
Route::get('/discount/create_form', function () {
    return view('wip.discount.create_form');
});

// create discount 
Route::post('/discount/create_form', [DiscountController::class, 'create']);

// edit discount 
Route::get('/discount/edit/{discount}', [DiscountController::class, 'edit']);

// update discount 
Route::post('/discount/edit/{discount}', [DiscountController::class, 'update']);


// update delete 
Route::get('/discount/destroy/{discount}', [DiscountController::class, 'destroy']);

// index discount
Route::get('/discounts', [DiscountController::class, 'index']);
