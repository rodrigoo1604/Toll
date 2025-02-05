<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TollStation;

class TollStationSeeder extends Seeder
{
    public function run()
    {
        $stations = [
            ['name' => 'AP6 Villalba', 'city' => 'Madrid', 'collected' => 0],
            ['name' => 'Autopista del Guadalmedina', 'city' => 'Malaga', 'collected' => 0],
            ['name' => 'AP7 Malaga - Estepona', 'city' => 'Malaga', 'collected' => 0],
            ['name' => 'AP6 Adanero', 'city' => 'Avila', 'collected' => 0],
            ['name' => 'Autopista Central de Galicia', 'city' => 'Santiago de Compostela', 'collected' => 0],
        ];

        foreach ($stations as $station) {
            TollStation::create($station);
        }
    }
}