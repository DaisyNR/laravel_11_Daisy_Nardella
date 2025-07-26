<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProductController;

Route::get('/',[PublicController::class,'welcome'])->name('home');

Route::post('/product/create',[ProductController::class,'store'])->name('product.store')->middleware('auth');
Route::get('/product/index',[ProductController::class,'index'])->name('product.index')->middleware('auth');
Route::get('/product/sell',[ProductController::class,'sell'])->name('product.sell')->middleware('auth');
