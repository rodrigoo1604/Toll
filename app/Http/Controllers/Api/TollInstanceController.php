<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TollInstance;
use App\Models\TollStation;
use App\Models\Vehicle;

class TollInstanceController extends Controller
{
    public function store(string $toll_station_id, string $vehicle_id)
    {
        $vehicle = Vehicle::findOrFail($vehicle_id);
        
        $vehicleType = $vehicle->vehicleType;

        $price = $vehicleType->price;
        if ($vehicle->axle_number) {
            $price *= $vehicle->axle_number;
        }

        $tollStation = TollStation::findOrFail($toll_station_id);

        TollInstance::create([
            'vehicle_id' => $vehicle->id,
            'toll_station_id' => $tollStation->id,
        ]);

        $tollStation->increment('collected', $price);

        return response()->json([
            'message' => 'Have a safe trip!',
            'license_plate' => $vehicle->license_plate,
            'toll_station' => $tollStation->name,
            'price_paid' => $price
        ], 201);
    }
}
