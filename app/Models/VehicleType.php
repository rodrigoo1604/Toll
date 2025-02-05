<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VehicleType extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'price'];

    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }
}