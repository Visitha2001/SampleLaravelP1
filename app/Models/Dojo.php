<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dojo extends Model
{
    protected $fillable = ['name', 'description', 'location'];
    /** @use HasFactory<\Database\Factories\DojoFactory> */
    use HasFactory;

    // how many records associated with this dojo
    public function ninjas(){
        return $this->hasMany(Ninja::class);
    }
}
