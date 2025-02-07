<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TollStation;

class TollStationController extends Controller
{
    public function index()
    {
        $tollStations = TollStation::with(['tollInstances.vehicle.vehicleType'])->get();
        return view('toll_stations', compact('tollStations'));
    }
}
