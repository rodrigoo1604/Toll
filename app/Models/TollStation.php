<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TollStation extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'city', 'seats'];

    public function tollInstances()
    {
        return $this->hasMany(TollInstance::class);
    }
}
