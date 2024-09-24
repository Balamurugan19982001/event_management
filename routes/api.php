<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('eventCategory',[App\Http\Controllers\api\EventController::class, "eventCategory"]);
Route::get('eventData/{id}',[App\Http\Controllers\api\EventController::class, "eventData"]);