<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TourController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TourController::class, 'index'])->name('welcome');

Route::get('/dashboard', [OrderController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('orders/{tour}/create', [OrderController::class, 'create'])->name('orders.create');
    Route::post('orders', [OrderController::class, 'store'])->name('orders.store');
    Route::get('/admin', [adminController::class, 'index'])->name('admin.index');
});

require __DIR__ . '/auth.php';
