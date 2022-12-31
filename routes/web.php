<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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
Route::get('/', function(){
    return view('login');
})->name('login');

Route::post('/login', [UserController::class, 'authentication'])->name('login.auth');

Route::post('/products', [ProductController::class, 'add'])->name('product.add')->middleware('auth');
Route::delete('/products/delete', [ProductController::class, 'delete'])->name('product.delete')->middleware('auth');

Route::get('/dashboard', function(){
    return view('dashboard');
})->middleware('auth');

Route::get('/dashboard',[ProductController::class, 'pass']);

Route::put('/products', [ProductController::class, 'update'])->name('product.update');

Route::get('/logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');