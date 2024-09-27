<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Cart\CartController;
use App\Http\Controllers\Orders\OrderController;
use App\Http\Controllers\Products\ProductController;
use App\Http\Controllers\Products\CategoryController;
use App\Http\Controllers\Services\ServicesController;

Route::get('/',[HomeController::class, 'index'])->name('home.index');

//Auth
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'register']);

//Reseteo Contraseña
Route::get('/forgot-password', [ResetPasswordController::class, 'index'])->name('password.request')->middleware('guest');
Route::post('/forgot-password', [ResetPasswordController::class, 'forgotPasswordEmail'])->name('password.email')->middleware('guest');
Route::get('/reset-password/{token}', [ResetPasswordController::class, 'passwordResetForm'])->name('password.reset')->middleware('guest');
Route::post('/reset-password', [ResetPasswordController::class, 'resetPasswordUpdate'])->name('password.update')->middleware('guest');

//Administrador
Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard')
->middleware(['auth', \App\Http\Middleware\AuthAdmin::class]);
Route::get('/dashboard/product', [AdminController::class, 'productManagment'])->name('admin.product')
->middleware(['auth', \App\Http\Middleware\AuthAdmin::class]);
//Productos
Route::get('/dashboard/product/create',[ProductController::class, 'create'])->name('product.create')
->middleware(['auth', \App\Http\Middleware\AuthAdmin::class]);
Route::post('/dashboard/product',[ProductController::class, 'store'])->name('product.store')
->middleware(['auth', \App\Http\Middleware\AuthAdmin::class]);
Route::get('/dashboard/product/{id}/edit',[ProductController::class, 'edit'])->name('product.edit')
->middleware(['auth', \App\Http\Middleware\AuthAdmin::class]);
Route::put('/dashboard/product/{id}',[ProductController::class, 'update'])->name('product.update')
->middleware(['auth', \App\Http\Middleware\AuthAdmin::class]);
Route::delete('/dashboard/product/{id}',[ProductController::class, 'destroy'])->name('product.destroy')
->middleware(['auth', \App\Http\Middleware\AuthAdmin::class]);

//Categoría Productos
Route::get('/joyas/{type?}',[CategoryController::class, 'index'])->name('joyas.index');
Route::get('/joyas/{id}',[ProductController::class, 'show'])->name('joyas.show');

//Pedidos
Route::get('/order-status',[OrderController::class, 'orderStatus'])->name('orders.order-status');

//Servicios
Route::get('/contact-us',[ServicesController::class, 'contactUs'])->name('services.contact-us');

//Carrito
Route::get('/cart',[CartController::class, 'index'])->name('cart.index');