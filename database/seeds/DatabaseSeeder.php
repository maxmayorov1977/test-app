<?php

use Illuminate\Database\Seeder;
use App\Car;
use App\Vendor;
use App\Transmission;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        factory(Car::class, 1000)->create();
        factory(Vendor::class, 25)->create();
        factory(Transmission::class, 2)->create();
    }
}
