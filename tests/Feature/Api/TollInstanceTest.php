<?php

namespace Tests\Feature\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\TollInstance;
use App\Models\Vehicle;
use App\Models\VehicleType;
use App\Models\TollStation;

class TollInstanceTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_registers_a_toll_instance_and_updates_collected()
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

        $response = $this->postJson("/api/toll/{$tollStation->id}/vehicle/{$vehicle->id}");

        $response->assertStatus(201)
                 ->assertJson([
                     'message' => 'Have a safe trip!',
                     'license_plate' => 'ABC123',
                     'toll_station' => 'Malaga A45',
                     'price_paid' => 100
                 ]);

        $this->assertDatabaseHas('toll_instances', [
            'vehicle_id' => $vehicle->id,
            'toll_station_id' => $tollStation->id
        ]);

        $this->assertEquals(100, $tollStation->fresh()->collected);
    }

    public function test_it_handles_nonexistent_toll_station()
    {
        $vehicleType = VehicleType::create(['type' => 'bike', 'price' => 50]);
        $vehicle = Vehicle::create([
            'license_plate' => 'XYZ789',
            'vehicle_type_id' => $vehicleType->id,
            'axle_number' => null
        ]);

        $response = $this->postJson("/api/toll/9999/vehicle/{$vehicle->id}");

        $response->assertStatus(404);
    }

    public function test_it_handles_nonexistent_vehicle()
    {
        $tollStation = TollStation::create([
            'name' => 'Madrid A6',
            'city' => 'Madrid'
        ]);

        $response = $this->postJson("/api/toll/{$tollStation->id}/vehicle/9999");

        $response->assertStatus(404);
    }
}

