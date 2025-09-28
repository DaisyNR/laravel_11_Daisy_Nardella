<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\PublicController;

Route::get('/',[PublicController::class,'welcome'])->name('home');
// create,index,store,show
Route::get('/movie/create',[MovieController::class,'create'])->name('movie.create');
Route::post('/movie/create/submit',[MovieController::class,'store'])->name('movie.submit');
Route::get('/movie/index',[MovieController::class,'index'])->name('movie.index');
Route::get('/movie/show/{movie}',[MovieController::class,'show'])->name('movie.show');
// update,delete,edit
Route::get('/movie/update/{movie}',[MovieController::class,'update'])->name('movie.update');
Route::get('/movie/delete/{movie}',[MovieController::class,'delete'])->name('movie.delete');
Route::get('/movie/edit/{movie}',[MovieController::class,'edit'])->name('movie.edit');