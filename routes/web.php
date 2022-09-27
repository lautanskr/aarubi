<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\ContactController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('dashboard',DashboardController::class);
Route::resource('admin_service',ServicesController::class);
Route::resource('admin_product',ProductController::class);
Route::resource('admin_contact',ContactController::class);

