<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;

Route::get('/teams', [TeamController::class, 'index']);
Route::get('/', function () {
    return view('welcome');
});
