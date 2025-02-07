<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\TollStationController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/toll-stations', [TollStationController::class, 'index']);
Route::get('/vehicles', [VehicleController::class, 'index']);