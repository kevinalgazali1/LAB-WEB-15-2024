<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\InventoryLogController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Rute untuk menampilkan daftar produk
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

// Rute untuk menampilkan form tambah produk
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');

// Rute untuk menyimpan produk baru
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

// Rute untuk menampilkan form edit produk
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');

// Rute untuk memperbarui produk
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');

// Rute untuk menghapus produk
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');

// Rute untuk menampilkan daftar Inventory Log
Route::get('/inventory-logs', [InventoryLogController::class, 'index'])->name('inventoryLog.index');

// Rute lainnya (sesuaikan dengan kebutuhan aplikasi Anda)
Route::get('/inventory-logs/create', [InventoryLogController::class, 'create'])->name('inventoryLog.create');
Route::post('/inventory-logs', [InventoryLogController::class, 'store'])->name('inventoryLog.store');
Route::get('/inventory-logs/{inventoryLog}/edit', [InventoryLogController::class, 'edit'])->name('inventoryLog.edit');
Route::put('/inventory-logs/{inventoryLog}', [InventoryLogController::class, 'update'])->name('inventoryLog.update');
Route::delete('/inventory-logs/{inventoryLog}', [InventoryLogController::class, 'destroy'])->name('inventoryLog.destroy');


Route::resource('Products', ProductController::class);
Route::resource('categories', CategoryController::class);
Route::resource('inventory_logs', InventoryLogController::class);
