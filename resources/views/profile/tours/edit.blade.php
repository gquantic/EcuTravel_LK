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
    <section class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header float-start mb-0">Редактирование данных о Рейсе | {{$tour->route_number }}</h2>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                <a href="{{ route('tours.index') }}" class="btn btn-primary">Вернутся</a>
            </div>
        </div>
        <div class="content-body">
            <!-- Input Mask start -->
            <section id="input-mask-wrapper">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <form action="{{ route('tours.update',$tour) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                            <label class="form-label">Транспорт</label>
                                            <select  name="vehicle_type" class="form-control credit-card-mask">
                                                @foreach($vehicles as $vehicle)
                                                    <option value="{{ $vehicle->id}}">
                                                        {{$vehicle->model_vehicle}}

                                                        {{"({$vehicle->gus_number_vehicle})"}}

                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                            <label class="form-label">Водитель</label>
                                            <select name="driver" id="" class="form-control credit-card-mask">
                                                @foreach($drivers as $driver)
                                                    <option>{{ $driver->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                            <label class="form-label">Водитель 2</label>
                                            <select name="driver_2" id=""  class="form-control credit-card-mask">

                                                <option value="">-------</option>
                                                @foreach($drivers as $driver)
                                                    <option>{{ $driver->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                            <label class="form-label">Маршрут</label>
                                            <select name="routes" class="form-control credit-card-mask">
                                                @foreach($routes as $route)
                                                    <option value="{{$route->id}}">{{ $route->number_routes. ' - ' . $route->depart_station . ' - ' . $route->arrival_station }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                            <label class="form-label" for="credit-card">Время отправки</label>
                                            <input type="text" class="form-control credit-card-mask" name="depart_time" value="{{$tour->depart_time}}">
                                        </div>

                                        <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                            <label class="form-label" for="credit-card">Время прибытия</label>
                                            <input type="text" class="form-control credit-card-mask" name="arrival_time" value="{{$tour->arrival_time}}">
                                        </div>

                                        <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                            <label class="form-label" for="credit-card">Дата отправления</label>
                                            <input type="text" class="form-control" name="departure_date" value="{{$tour->departure_date}}">
                                        </div>

                                        <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                            <label class="form-label" for="credit-card">Дата прибытия</label>
                                            <input type="text" class="form-control" name="arrival_date" value="{{$tour->arrival_date}}">
                                        </div>

                                        <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                            <label class="form-label" for="credit-card">Примечания</label>
                                            <input type="text" class="form-control" name="note_tours" value="{{$tour->note_tours}}">
                                        </div>

                                        <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                            <label for="condition_tours" class="form-label">Состояние</label>
                                            <select name="condition_tours" id="" class="form-control ">
                                                <option value="1">Активно</option>
                                                <option value="0">Не активно</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <button type="submit" class="btn btn-primary">Сохранить изменения</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Input Mask End -->
        </div>
    </section>
@endsection
