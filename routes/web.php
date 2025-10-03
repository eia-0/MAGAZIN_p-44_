<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/reports', function () {
    return view('report.index');
})->name('reports.index');

Route::get('/reports/create', function () {
    return view('report.create');
})->name('reports.create');



Route::get('/about', [TestController::class, 'about'])->name('about');

Route::get('/contacts', [TestController::class, 'contacts'])->name('contacts');

Route::get('/products',[ProductController::class,'index'])->name('products.index');

Route::delete('/products/{product}', [ProductController::class, 'destroy']) -> name('products.destroy');

Route::get('/products/{product}', [ProductController::class,'show']) -> name('products.show');

Route::get('/create',[ProductController::class,'create'])->name('products.create');

Route::post('/products',[ProductController::class,'store'])->name('products.store');