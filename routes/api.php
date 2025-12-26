<?php

use App\Http\Controllers\ArtistController;
use App\Http\Controllers\ContratacaoController;
use Illuminate\Support\Facades\Route;

// API Routes for Artists and Contratacoes
Route::apiResource('artistas' , ArtistController::class);
Route::apiResource('contratacoes' , ContratacaoController::class);