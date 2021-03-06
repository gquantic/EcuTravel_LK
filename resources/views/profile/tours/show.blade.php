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
                        <h2 class="content-header float-start mb-0">Просмотр данных о Рейсе | {{$tour->route_number }}</h2>
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
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                            <label class="form-label" for="credit-card">Транспорт</label>
                                            <input type="text" disabled class="form-control credit-card-mask"  value="{{$tour->vehicle_model_vehicle}} ({{$tour->vehicle_gus_number_vehicle}})">
                                        </div>

                                        <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                            <label class="form-label" for="credit-card">Водитель</label>
                                            <input type="text" disabled class="form-control credit-card-mask"  value="{{$tour->driver}}">
                                        </div>

                                        <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                            <label class="form-label" for="credit-card">Водитель 2</label>
                                            <input type="text" disabled class="form-control credit-card-mask"  value="{{$tour->driver_2}}">
                                        </div>

                                        <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                            <label class="form-label" for="credit-card">Маршрут</label>
                                            <input type="text"  class="form-control credit-card-mask" value="{{$tour->route_number}} [ {{$tour->route_depart_station}} - {{$tour->route_arrival_station}} ]">
                                        </div>
                                        <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                            <label class="form-label" for="credit-card">Время отправки</label>
                                            <input type="text" disabled class="form-control credit-card-mask" name="depart_time" value="{{$tour->depart_time}}">
                                        </div>

                                        <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                            <label class="form-label" for="credit-card">Время прибытия</label>
                                            <input type="text" disabled class="form-control credit-card-mask" name="arrival_time" value="{{$tour->arrival_time}}">
                                        </div>

                                        <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                            <label class="form-label" for="credit-card">Дата отправления</label>
                                            <input type="text" disabled class="form-control" name="departure_date" value="{{$tour->departure_date}}">
                                        </div>

                                        <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                            <label class="form-label" for="credit-card">Дата прибытия</label>
                                            <input type="text" disabled class="form-control" name="arrival_date" value="{{$tour->arrival_date}}">
                                        </div>

                                        <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                            <label for="" class="form-label">Состояние</label>
                                            <select disabled name="" id="" class="form-control ">
                                                <option value="1" @if($tour->condition_tours == 1) selected @endif>Активно</option>
                                                <option value="0" @if($tour->condition_tours == 0) selected @endif>Не активно</option>
                                            </select>
                                        </div>

                                        <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                            <label class="form-label" for="credit-card">Примечания</label>
                                            <textarea class="form-control mt-1" name="note_tours" id="exampleFormControlTextarea1" placeholder="{{$tour->note_tours}}" rows="3"></textarea>
{{--                                            <input type="text" disabled class="form-control" name="note_tours" value="{{$tour->note_tours}}">--}}
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Input Mask End -->
        </div>
    </section>
@endsection
