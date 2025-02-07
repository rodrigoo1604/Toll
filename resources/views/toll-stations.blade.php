@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Toll Stations</h1>
    
    <div class="row">
        @foreach($tollStations as $tollStation)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $tollStation->name }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $tollStation->city }}</h6>
                        <ul class="list-group list-group-flush">
                            @foreach($tollStation->tollInstances as $instance)
                                <li class="list-group-item">
                                    <strong>License plate:</strong> {{ $instance->vehicle->license_plate }} 
                                    <br>
                                    <strong>Amount paid:</strong> ${{ $instance->vehicle->vehicleType->price * ($instance->vehicle->axle_number ?? 1) }}
                                </li>
                            @endforeach
                        </ul>
                        <p class="mt-3"><strong>Total Collected:</strong> ${{ $tollStation->collected }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
