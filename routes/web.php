<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;

Route::get('/players/create', [PlayerController::class, 'create']);
Route::post('/players', [PlayerController::class, 'store']);
Route::get('/teams', [TeamController::class, 'index']);
Route::get('/', function () {
    return view('welcome');
});
