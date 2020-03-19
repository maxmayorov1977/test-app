@extends('layouts.form')

@section('title', $title)

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Новый продукт') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">{{ session('status') }}</div>
                        @endif
                        @if (count($errors) > 0)
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger">{{ $error }}</div>
                            @endforeach
                        @endif
                        <form method="POST" action="{{ URL::to('carStore') }}" enctype="multipart/form-data" spellcheck="false">
                            @csrf
                            <div class="md-form mb-5">
                                <select name="vendor_id" class="custom-select custom-select-sm">
                                    <option value="" >Выберите производителя</option>
                                    @foreach ($vendors as $vendor)
                                        <option value="{{ $vendor['id'] }}">{{ $vendor['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="md-form">
                                <input type="text" name="model_name" class="form-control" value="{{ old('name') }}">
                                <label for="model_name">{{ __('Модель') }}</label>
                            </div>
                            <br/>
                            <div class="md-form">
                                <input type="text" name="year_release" class="form-control" value="{{ old('year_release') }}">
                                <label for="year_release">{{ __('Год выпуска') }}</label>
                            </div>
                            <br/>
                            <div class="md-form">
                                <input type="text" name="horse_power" class="form-control" value="{{ old('horse_power') }}">
                                <label for="horse_power">{{ __('Мощность') }}</label>
                            </div>
                            <br/>
                            <div class="md-form mb-5">
                                <select name="transmission_id" class="custom-select custom-select-sm">
                                    <option value="" >Выберите тип коробки передач</option>
                                    @foreach ($transmissions as $transmission)
                                        <option value="{{ $transmission['id'] }}">{{ $transmission['type'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <br/>
                            <br/>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-5">
                                    <button type="submit" class="btn btn-primary btn-outline-grey">
                                        {{ __('Готово') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
