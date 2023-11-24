<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get("panel",[AdminController::class, "index"] )->name('admin');
Route::get('getProducts', [AdminController::class, 'getProducts'])->name('getProducts');
Route::post('addProduct', [AdminController::class, 'addProduct'])->name('addProduct');
Route::put('product_upd/{id}',[AdminController::class, 'update'])->name('upd_prdc');
Route::get('deleteProduct', [AdminController::class, 'deleteProduct'])->name('deleteProduct');
Route::get('log_out', [AdminController::class, "log_out"])->name("log_out");
