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
            <tr>
                <th scope="row">{{ $car['vendor']['name'] }}</th>
                    <td>{{ $car['model_name'] }}</td>
                    <td>{{ $car['year_release'] }}</td>
                    <td>{{ $car['horse_power'] }} л.с.</td>
                    <th>{{ $car['transmission']['type'] }}</th>
                    <th><a href="{{ url("/carEdit/{$car['id']}") }}"><i class="fas fa-pen"></i></a> <form action="{{ url('/carDelete', ['id' => $car['id']]) }}" method="post"><button><i class="fas fa-trash"></i></button><input type="hidden" name="_method" value="delete" /><input type="hidden" name="_token" value="{{ csrf_token() }}"></form>
                </th>
            </tr>
        </tbody>
    </table>
    {!! $car['id'] !!}
@endsection
