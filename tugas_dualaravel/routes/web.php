<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name("home");
Route::get('/about', [HomeController::class, 'about'])->name("about");
Route::get('/contact', [HomeController::class, 'contact'])->name("contact");
Route::get('/services', [HomeController::class, 'services'])->name("services");
Route::get('/portofolio', [HomeController::class, 'portofolio'])->name("portofolio");
