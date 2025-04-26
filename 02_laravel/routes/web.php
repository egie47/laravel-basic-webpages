<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name("home");

Route::get('/about', [AboutController::class, 'index'])->name("about");

Route::get('/contact', [ContactController::class, 'index'])->name("contact");

Route::get('/about/company', [AboutController::class, 'company']);
