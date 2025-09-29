<?php

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
