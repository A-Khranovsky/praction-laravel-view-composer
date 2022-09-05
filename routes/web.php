<?php

use App\Http\Controllers\HomeController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/text', [HomeController::class, 'ViewText']);
Route::post('/set/name', [HomeController::class, 'setName']);


