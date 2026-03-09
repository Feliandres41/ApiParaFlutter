<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;

Route::post('/contactos', [ContactoController::class, 'store']);
Route::get('/contactos', [ContactoController::class, 'index']);
Route::delete('/contactos/{id}',[ContactoController::class, 'destroy']);
Route::put('/contactos/{id}',[ContactoController::class, 'update']);