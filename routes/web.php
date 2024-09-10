<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('dashboard'));
Route::get('/about', fn () => view('about'));
Route::get('/gallery', fn () => view('gallery'));
Route::get('/login', fn () => view('login'));
