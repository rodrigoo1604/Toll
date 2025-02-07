<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Vehicle;
use App\Models\VehicleType;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class VehicleControllerTest extends TestCase
{

    use RefreshDatabase;

    public function test_it_displays_toll_stations_page()
    {
        $vehicleType = VehicleType::create([
            'type' => 'truck',
            'price' => 50
        ]);
        $vehicle = Vehicle::create([
            'license_plate' => 'ABC123',
            'vehicle_type_id' => $vehicleType->id,
            'axle_number' => 3
        ]);
        $response = $this->get(route('vehicles'));

        $response->assertStatus(200);
        $response->assertViewIs('vehicles');
        $response->assertViewHas('vehicles');
    }
}
