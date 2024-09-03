<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Routing Landing Page
Route::get('/', [HomeController::class, 'index'])->name('home');
