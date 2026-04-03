<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'master'])->name('master');
Route::get('/home', [HomeController::class, 'home'])->name('home');


// --- Category routes ---
Route::get('/list-categories', [CategoryController::class, 'index'])->name('categories.list');
Route::get('/create-category', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/store-category', [CategoryController::class, 'store'])->name('categories.store');