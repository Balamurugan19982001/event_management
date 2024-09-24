<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('categoryList',[App\Http\Controllers\api\CategoryController::class, "categoryList"]);
Route::get('categoryData/{id}',[App\Http\Controllers\api\CategoryController::class, "categoryData"]);