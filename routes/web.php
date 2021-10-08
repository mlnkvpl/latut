<?php

use App\Http\Controllers\CategoryController;
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

Route::get('/category', function () {
    return view('wip.category.form');
});

Route::post('/category', [CategoryController::class,'save']);

Route::get('/categories', [CategoryController::class, 'view']);
Route::get('/category/edit/{id}', [CategoryController::class, 'edit']);
Route::post('/category/edit', [CategoryController::class, 'update']);
Route::get('/category/delete/{id}', [CategoryController::class, 'delete']);
