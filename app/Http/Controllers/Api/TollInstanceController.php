<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TollInstance;
use App\Models\TollStation;
use App\Models\Vehicle;

class TollInstanceController extends Controller
{
    public function store($toll_station_id, $license_plate)
    {
        $vehicle = Vehicle::where('license_plate', $license_plate)->first();
        
        $vehicleType = $vehicle->vehicleType;

        $price = $vehicleType->price;
        if (!is_null($vehicle->axle_number)) {
            $price *= $vehicle->axle_number;
        }

        $tollStation = TollStation::find($toll_station_id);
        if (!$tollStation) {
            return response()->json(['error' => 'Peaje no encontrado'], 404);
        }

        TollInstance::create([
            'vehicle_id' => $vehicle->id,
            'toll_station_id' => $tollStation->id,
        ]);

        $tollStation->increment('collected', $price);

        return response()->json([
            'toll_station' => $tollStation->name,
            'collected' => $tollStation->collected
        ], 201);
    }
}
