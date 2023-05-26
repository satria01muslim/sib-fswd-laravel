<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Task22Controller;

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

Route::get('/product/show', [Task22Controller::class,'index'])->name('product.index');
Route::get('/product/add-form', [Task22Controller::class,'create'])->name('product.create');
Route::post('/product/store', [Task22Controller::class,'store'])->name('product.store');
Route::get('/product/{id}/edit', [Task22Controller::class,'edit'])->name('product.edit');
Route::post('/product/{id}/update-form', [Task22Controller::class,'update'])->name('product.update');
Route::delete('/product/{id}/delete-form', [Task22Controller::class,'destroy'])->name('product.destroy');