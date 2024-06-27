<?php

use App\Http\Controllers\PhonebookController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PhonebookController::class, 'home_page'])->name('home');
