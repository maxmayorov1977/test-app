@extends('layouts.main')

@section('title', $title)

@section('content')
    <table class="table">
        <thead class="black white-text">
            <tr>
                <th scope="col">Производитель</th>
                <th scope="col">Модель</th>
                <th scope="col">Год выпуска</th>
                <th scope="col">Мощность</th>
                <th scope="col">Трансмиссия</th>
                <th scope="col">Действия</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cars as $car)
                <tr>
                    <th scope="row">{{ $car->vendor->name }}</th>
                    <td>{{ $car->model_name }}</td>
                    <td>{{ $car->year_release }}</td>
                    <td>{{ $car->horse_power }} л.с.</td>
                    <th>{{ $car->transmission->type }}</th>
                    <th><a href="{{ url("/car/{$car->id}") }}"><i class="fas fa-eye"></i></a> <a href="{{ url("/carEdit/{$car->id}") }}"><i class="fas fa-pen"></i></a> <a href="{{ url("/carDelete/{$car->id}") }}"><i class="fas fa-trash"></i></a></th>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br/>
    {!! $links !!}
@endsection
