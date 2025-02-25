<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

Route::get('/', [FrontController::class, 'home'])->name('home');

Route::get('/services', [FrontController::class, 'services'])->name('services');


Route::get('/academy', [FrontController::class, 'academy'])->name('academy');
