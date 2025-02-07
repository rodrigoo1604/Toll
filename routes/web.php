<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\TollStationController;

Route::get('/', function () {
    return view('layouts/app');
});
Route::get('/toll-stations', [TollStationController::class, 'index'])->name("toll-stations");
Route::get('/vehicles', [VehicleController::class, 'index'])->name("vehicles");