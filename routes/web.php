<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Task22Controller;
use App\Http\Controllers\ProductController;

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
    return view('landing');
})->name('landing');;

Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
Route::get('/category', function () {return view('category.index');})->name('category.index');
Route::get('/role', function () {return view('role.index');})->name('role.index');

//Untuk User
Route::get('/user/show', [Task22Controller::class,'index'])->name('user.index');
Route::get('/user/add-form', [Task22Controller::class,'create'])->name('user.create');
Route::post('/user/store', [Task22Controller::class,'store'])->name('user.store');
Route::get('/user/{id}/edit', [Task22Controller::class,'edit'])->name('user.edit');
Route::post('/user/{id}/update-form', [Task22Controller::class,'update'])->name('user.update');
Route::delete('/user/{id}/delete-form', [Task22Controller::class,'destroy'])->name('user.destroy');

//Untuk Product
Route::get('/product/show', [ProductController::class,'index'])->name('product.index');
Route::get('/product/add-form', [ProductController::class,'create'])->name('product.create');
Route::post('/product/store', [ProductController::class,'store'])->name('product.store');
Route::get('/product/{id}/edit', [ProductController::class,'edit'])->name('product.edit');
Route::post('/product/{id}/update-form', [ProductController::class,'update'])->name('product.update');
Route::delete('/product/{id}/delete-form', [ProductController::class,'destroy'])->name('product.destroy');