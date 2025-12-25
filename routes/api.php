<?php

use App\Http\Controllers\ArtistController;
use App\Http\Controllers\ContratacaoController;
use Illuminate\Support\Facades\Route;

Route::apiResource('artists' , ArtistController::class);
Route::apiResource('contracts' , ContratacaoController::class);