<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;

Route::get('/nba-player', [App\Http\Controllers\ApiController::class, 'player']);
Route::get('/players/{id}/edit', [PlayerController::class, 'edit']);
Route::put('/players/{id}', [PlayerController::class, 'update']);
Route::delete('/players/{id}', [PlayerController::class, 'destroy']);
Route::get('/players/create', [PlayerController::class, 'create']);
Route::post('/players', [PlayerController::class, 'store']);
Route::get('/teams', [TeamController::class, 'index']);
Route::get('/', function () {
    return view('welcome');
});
