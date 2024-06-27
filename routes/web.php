<?php

use App\Http\Controllers\PhonebookController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PhonebookController::class, 'home_page'])->name('home');
Route::get('/search', [PhonebookController::class, 'search'])->name('search');
