<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = ['make', 'model', 'year', 'color' , 'weight' , 'dojo_id'];
    /** @use HasFactory<\Database\Factories\VehicleFactory> */
    use HasFactory;

    // Define the relationship to the Dojo model
    public function dojo()
    {
        return $this->belongsTo(Dojo::class);
    }
}
