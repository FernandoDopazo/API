<?php

use App\Http\Controllers\RegisterCorporationController;
use App\Http\Controllers\RegisterProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('corporative', RegisterCorporationController::class);

Route::apiResource('profile', RegisterProfileController::class);
