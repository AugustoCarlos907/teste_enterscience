<?php

use App\Http\Controllers\ArtistController;
use App\Http\Controllers\ContratacaoController;
use Illuminate\Support\Facades\Route;

Route::apiResource('artistas' , ArtistController::class);
Route::apiResource('contratacoes' , ContratacaoController::class);