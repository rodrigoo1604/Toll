<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TollInstanceController;

Route::post('/toll/{toll_station_id}/vehicle/{license_plate}', [TollInstanceController::class, 'store']);