<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;

class VehicleController extends Controller
{
    public function index()
    {
        $vehicles = Vehicle::with(['vehicleType', 'tollInstances'])->get();
        return view('vehicles', compact('vehicles'));
    }
}
