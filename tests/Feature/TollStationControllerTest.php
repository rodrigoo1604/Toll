<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Vehicle;
use App\Models\TollStation;
use App\Models\VehicleType;
use App\Models\TollInstance;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TollStationControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_displays_toll_stations_page()
    {
        $vehicleType = VehicleType::create([
            'type' => 'car',
            'price' => 100
        ]);
        $vehicle = Vehicle::create([
            'license_plate' => 'ABC123',
            'vehicle_type_id' => $vehicleType->id,
            'axle_number' => null
        ]);
        $tollStation = TollStation::create([
            'name' => 'Malaga A45',
            'city' => 'Malaga'
        ]);
        TollInstance::create(['toll_station_id' => $tollStation->id, 'vehicle_id' => $vehicle->id]);

        $response = $this->get(route('toll-stations'));

        $response->assertStatus(200);
        $response->assertViewIs('toll-stations');
        $response->assertViewHas('tollStations');
    }
}