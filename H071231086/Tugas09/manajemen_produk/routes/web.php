<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return redirect()->route('products.index');
})->name('home');


use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\InventoryLogController;
// Mengarahkan halaman utama (/) ke daftar produk
Route::get('/index', [ProductController::class, 'index']);

// Rute CRUD untuk Kategori
Route::resource('/categories', CategoryController::class)->except(['show']);

// Rute CRUD untuk Produk
Route::resource('/products', ProductController::class)->except(['show']);

// Rute CRD (tanpa Update) untuk Log Inventaris
Route::resource('/inventory-logs', InventoryLogController::class)->only(['index', 'create', 'store', 'destroy']);

