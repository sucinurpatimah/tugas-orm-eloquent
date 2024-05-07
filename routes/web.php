<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ProductController::class, 'index'])->name('product.index');
Route::get('/admin/list-products', [ProductController::class, 'list'])->name('product.list');
Route::get('/merchant/list-products', [ProductController::class, 'list'])->name('merchant.daftar');
Route::get('/tambah-product', [ProductController::class, 'create'])->name('product.create');
Route::post('product/store', [ProductController::class, 'store'])->name('product.store');
Route::get('product/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('product/{id}/update', [ProductController::class, 'update'])->name('product.update');
Route::delete('product/{id}/destroy', [ProductController::class, 'destroy'])->name('product.destroy');
