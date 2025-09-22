<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/about', [TestController::class, 'about'])->name('about');

Route::get('/contacts', [TestController::class, 'contacts'])->name('contacts');
