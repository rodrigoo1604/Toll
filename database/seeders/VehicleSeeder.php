<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vehicle;
use App\Models\VehicleType;

class VehicleSeeder extends Seeder
{
    public function run()
    {
        $car = VehicleType::where('type', 'car')->first();
        $bike = VehicleType::where('type', 'bike')->first();
        $truck = VehicleType::where('type', 'truck')->first();

        $vehicles = [
            ['license_plate' => 'AAA111', 'vehicle_type_id' => $car->id, 'axle_number' => null],
            ['license_plate' => 'BBB222', 'vehicle_type_id' => $bike->id, 'axle_number' => null],
            ['license_plate' => 'CCC333', 'vehicle_type_id' => $truck->id, 'axle_number' => 2],
            ['license_plate' => 'DDD444', 'vehicle_type_id' => $truck->id, 'axle_number' => 3],
            ['license_plate' => 'EEE555', 'vehicle_type_id' => $truck->id, 'axle_number' => 6],
        ];

        foreach ($vehicles as $vehicle) {
            Vehicle::create($vehicle);
        }
    }
}
