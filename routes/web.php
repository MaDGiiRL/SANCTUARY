<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

Route::get('/', [FrontController::class, 'home'])->name('home');

Route::get('/services', [FrontController::class, 'services'])->name('services');

//controller
Route::get('/academ', [FrontController::class, 'academy'])->name('academy');
//rotta parametrica
Route::get('/academy/{id}', [FrontController::class, 'show'])->name('teacher-show');

//form lato utente
Route::get('/booking', [FrontController::class, 'booking'])->name('booking');
//form lato server
Route::post('/form', [FrontController::class, 'submit'])->name('submit');
