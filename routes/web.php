<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UtilisateurController;
use Illuminate\Support\Facades\Route;





Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/message', [UtilisateurController::class, 'message'])->name('message');


Route::get('/master', [HomeController::class, 'master'])->name('master');
Route::get('/home', [HomeController::class, 'home'])->name('home');



// --- Category routes ---
Route::get('/list-categories', [CategoryController::class, 'index'])->name('categories.list');
Route::get('/create-category', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/store-category', [CategoryController::class, 'store'])->name('categories.store');

// --- Product routes ---
Route::get('/list-products', [ProductController::class, 'index'])->name('products.list');
Route::get('/create-product', [ProductController::class, 'create'])->name('products.create');
Route::post('/store-product', [ProductController::class, 'store'])->name('products.store');

// --- User routes ---
Route::get('/list-users', [UtilisateurController::class, 'index'])->name('users.list');
Route::get('/create-user', [UtilisateurController::class, 'create'])->name('users.create');
Route::post('/store-user', [UtilisateurController::class, 'store'])->name('users.store');

// --- Role routes ---
Route::get('/list-roles', [RolesController::class, 'index'])->name('roles.list');
Route::get('/create-role', [RolesController::class, 'create'])->name('roles.create');
Route::post('/store-role', [RolesController::class, 'store'])->name('roles.store');

Route::get('/assign-role/{id}', [UtilisateurController::class, 'roleassignview'])->name('roles.assignview');
Route::post('/assign-role/{id}', [UtilisateurController::class, 'roleassign'])->name('roles.assign');