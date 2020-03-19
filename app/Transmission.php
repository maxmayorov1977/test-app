<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transmission extends Model
{
    protected $fillable = [
        'transmission_id'
    ];

    protected $casts = [
        'created_at' => 'datetime:d/m/y',
        'updated_at' => 'datetime:H:i:s d/m/y'
    ];

    public function cars()
    {
        return $this->hasMany(Car::class);
    }
}
