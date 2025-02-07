@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Vehicles</h1>

    <div class="row">
        @foreach($vehicles as $vehicle)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">License plate: {{ $vehicle->license_plate }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Type: {{ $vehicle->vehicleType->type }}</h6>
                        <p><strong>Total spent:</strong> ${{ $vehicle->tollInstances->sum(fn($instance) => $instance->vehicle->vehicleType->price * ($instance->vehicle->axle_number ?? 1)) }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
