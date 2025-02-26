<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

Route::get('/', [FrontController::class, 'home'])->name('home');

//controller
Route::get('/services', [FrontController::class, 'services'])->name('services');
//rotta parametrica
Route::get('/services/{id}', [FrontController::class, 'price'])->name('price-show');


//controller
Route::get('/academy', [FrontController::class, 'academy'])->name('academy');
//rotta parametrica
Route::get('/academy/{id}', [FrontController::class, 'show'])->name('teacher-show');

//form lato utente
Route::get('/booking', [FrontController::class, 'booking'])->name('booking');
//form lato server
Route::post('/form', [FrontController::class, 'submit'])->name('submit');

Route::post('/form2', [FrontController::class, 'submit2'])->name('submit2');

// risposta positiva al submit mail
Route::get('/confirmed', [FrontController::class, 'confirmed'])->name('confirmed');
//risposta negativa al submit mail
Route::get('/denied', [FrontController::class, 'denied'])->name('denied');


