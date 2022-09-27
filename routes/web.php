<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('dashboard',DashboardController::class);
// Admin Product //
Route::get('admin_product',[ProductController::class,'index'])->name('admin.product');
Route::post('admin_product_store',[ProductController::class,'store'])->name('admin.product.store');
Route::post('admin_product_update\{id}',[ProductController::class,'update'])->name('admin.product.update');
Route::get('admin_product_create',[ProductController::class,'create'])->name('admin.product.create');
Route::get('admin_product_edit\{id}',[ProductController::class,'edit'])->name('admin.product.edit');
Route::delete('admin_product_destroy\{id}',[ProductController::class,'destroy'])->name('admin.product.destroy');
