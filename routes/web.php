<?php

use App\Http\Controllers\walletController;
use Illuminate\Support\Facades\Route;

// Route::get('/', [EncuestaController::class, 'index']);
Route::get('/balance', [walletController::class, 'getBalance']);
// Route::post('/votar', [EncuestaController::class, 'votar'])->name('votar');
// Route::post('/recompensa', [EncuestaController::class, 'enviarRecompensa'])->name('enviarRecompensa');