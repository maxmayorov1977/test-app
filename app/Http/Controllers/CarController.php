<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;
use App\Car;
use App\Vendor;
use App\Transmission;

class CarController extends Controller
{
    public function show(Request $request)
    {
        $car = Car::with(
                'vendor',
                'transmission'
            )
            ->findOrFail($request->id)
            ->toArray();
        return view('main.car', [
            'title' => $car['model_name'],
            'car' => $car
        ]);
    }

    public function create()
    {
        $vendors = Vendor::all();
        $transmissions = Transmission::all();
        return view('main.createCar', [
            'title' => 'Новый автомобиль',
            'vendors' => $vendors,
            'transmissions' => $transmissions
        ]);
    }

    public function store(StoreCarRequest $request)
    {
        $car = new Car();
        $car->vendor_id = intval($request->vendor_id);
        $car->model_name = $request->model_name;
        $car->year_release = intval($request->year_release);
        $car->horse_power = intval($request->horse_power);
        $car->transmission_id = intval($request->transmission_id);
        $car->save();
        return redirect('/')->with('status', 'Продукт сохранён.');
    }

    public function edit(Request $request)
    {
        $car = Car::with(
                'vendor',
                'transmission'
            )
            ->findOrFail($request->id)
            ->toArray();
        $vendors = Vendor::all();
        $transmissions = Transmission::all();
        return view('main.editCar', [
            'title' => $car['model_name'],
            'car' => $car,
            'vendors' => $vendors,
            'transmissions' => $transmissions
        ]);
    }

    public function update($id, UpdateCarRequest $request)
    {
        $car = Car::find($id);
        $car->vendor_id = intval($request->vendor_id);
        $car->model_name = $request->model_name;
        $car->year_release = intval($request->year_release);
        $car->horse_power = intval($request->horse_power);
        $car->transmission_id = intval($request->transmission_id);
        $car->save();
        return back()->with('status', 'Изменения сохранёны.');
    }

    public function destroy(Request $request)
    {
        Car::find($request->id)->delete();
        return redirect('/')->with('status', 'Продукт удалён');
    }
}
