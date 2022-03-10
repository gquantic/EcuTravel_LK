@extends('layouts.meta')


@section('page-title')
    Панель
@endsection

@section('page-styles')
    <link rel="stylesheet" href="{{ asset('css/base/pages/dashboard-ecommerce.css') }}">
@endsection

@section('body-class')
    pace-done vertical-layout vertical-menu-modern navbar-floating footer-static menu-expanded
@endsection

@section('content')

    <section id="dashboard-analytics">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('vehicle.store') }}" method="POST">
                            @csrf
                            @method('POST')

                            <div class="form-group mb-1">
                                <label for="basicSelect">Тип транспортного средства</label>
                                <select class="form-control mt-1" id="basicSelect" name="type_ts" >
                                    <option value="bus">Автобус</option>
                                    <option value="passenger">Легковой транспорт</option>
                                    <option value="minibus">Микроавтобус</option>
                                </select>

                            </div>

                            <div class="form-group mb-1" id="gosNumber">
                                <label for="">Модель</label>
                                <input type="text" value="{{old('model_vehicle')}}" name="model_vehicle" class="form-control mt-1 @error('model_vehicle') is-invalid @enderror">

                                @error('model_vehicle')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group mb-1" id="gosNumber">
                                <label for="">Регистрационный номер</label>
                                <input type="number" value="{{old('gus_number_vehicle')}}" name="gus_number_vehicle" class="form-control mt-1 @error('gus_number_vehicle') is-invalid @enderror">

                                @error('gus_number_vehicle')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group mb-1" id="gosNumber">
                                <label for="">Количество посадочных мест</label>
                                <input type="number" value="{{old('number_of_seats')}}" name="number_of_seats" class="form-control mt-1 @error('number_of_seats') is-invalid @enderror">

                                @error('number_of_seats')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group mb-1">
                                <label for="">Примечания</label>
                                <textarea class="form-control mt-1" name="note_vehicle" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>

                            <div class="form-group mb-1" data-select2-id="45">
                                <label class="form-label" for="basicSelect">Состояние</label>
                                <select name="condition_vehicle" id="basicSelect" class="form-select mt-1">
                                    <option value="1">Активно</option>
                                    <option value="0">Не активно</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Создать</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
