<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;

Route::get('/', [LandingPageController::class, 'index'])->name('home');


Route::get('/login', function () {
    return view('login'); // akan membuka resources/views/login.blade.php
})->name('login');

Route::get('/register', function () {
    return view('register');
});

Route::get('/dashboard', [AdminController::class, 'index'])
    ->middleware('auth')
    ->name('dashboard');


Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

Route::get('/admin/categories', function () {
    return view('admin.categories');
})->name('categories');

Route::get('/admin/discounts', function () {
    return view('admin.discounts');
})->name('discounts');



Route::get('/category/{category}', [ProductController::class, 'category'])->name('category');

// Halaman kategori
Route::get('/category/{id}', [CategoryController::class, 'show'])->name('category.show');


//untuk Login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
//untuk Registrasi
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
//dashboard setelah Login


Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/products', [ProductController::class, 'index'])->name('products');
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');
    Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
    Route::get('/discounts', [ProductController::class, 'discounts'])->name('discounts');
    
});


Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
    Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
    Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');
});