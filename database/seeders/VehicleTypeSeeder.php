<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\VehicleType;

class VehicleTypeSeeder extends Seeder
{
    public function run()
    {
        $types = [
            ['type' => 'car', 'price' => 100],
            ['type' => 'bike', 'price' => 50],
            ['type' => 'truck', 'price' => 50],
        ];

        foreach ($types as $type) {
            VehicleType::create($type);
        }
    }
}

