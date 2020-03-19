<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'model_name', 'year_release', 'horse_power'
    ];

    protected $casts = [
        'created_at' => 'datetime:d/m/y',
        'updated_at' => 'datetime:H:i:s d/m/y'
    ];

    public function vendor()
    {
        return $this->belongsTo(Vendor::class)->withDefault([
            'name' => 'Отсутствует'
        ]);
    }

    public function transmission()
    {
        return $this->belongsTo(Transmission::class)->withDefault([
            'type' => 'Отсутствует'
        ]);
    }
}
