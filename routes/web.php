<?php

use App\Http\Controllers\AboutCOntroller;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', DashboardController::class);
Route::get('/about', [AboutCOntroller::class, 'index']);
Route::get('/gallery', fn () => view('gallery'));
Route::get('/login', fn () => view('login'));
