<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class MainController extends Controller
{
    public function index()
    {
        $cars = Car::with(
                'vendor',
                'transmission'
            )
            ->orderBy('created_at', 'ASC')
            ->paginate(20);
        return view('main.cars', [
            'title' => 'Автомобили',
            'cars' => $cars,
            'links' => $cars->links()
        ]);
    }
}
