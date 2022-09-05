<?php

use App\Http\Controllers\HomeController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::post('/set/name', function(Request $request){
    session(['user_name' => $request->user_name]);
    return redirect('/');
});


