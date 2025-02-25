<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

Route::get('/', [FrontController::class, 'home'])->name('home');

Route::get('/services', [FrontController::class, 'services'])->name('services');

//controller
Route::get('/academy', [FrontController::class, 'academy'])->name('academy');
//rotta parametrica
Route::get('/academy/{id}', [FrontController::class, 'show'])->name('academy.show');
