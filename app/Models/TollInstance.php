<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TollInstance extends Model
{
    use HasFactory;

    protected $fillable = ['vehicle_id', 'toll_station_id'];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function tollStation()
    {
        return $this->belongsTo(TollStation::class);
    }
}
