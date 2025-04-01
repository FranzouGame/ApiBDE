<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SoireeController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\GoodieController;

Route::apiResource('soirees', SoireeController::class);
Route::apiResource('reservations', ReservationController::class);
Route::apiResource('goodies', GoodieController::class);
