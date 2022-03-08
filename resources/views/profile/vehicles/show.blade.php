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
                        <h2 class="content-header mb-0">Просмотр данных транспортного средства | {{$vehicle->id}}</h2>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                <a href="{{ route('vehicle.index') }}" class="btn btn-primary">Вернутся</a>
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
                                            <label class="form">Тип маршрута</label>
                                            <select disabled name="route_type" class="form-control credit-card-mask mt-1">
                                                <option value="bus" @if($vehicle->type_ts == 'bus') selected @endif>Автобус</option>
                                                <option value="passenger" @if($vehicle->type_ts == 'passenger') selected @endif>Легковой транспорт</option>
                                                <option value="minibus" @if($vehicle->type_ts == 'minibus') selected @endif>Микроавтобус</option>
                                            </select>
                                        </div>

                                        <div class="col-xl-4 col-md-6 col-sm-12 mb-2" id="gosNumber">
                                            <label for="">Модель</label>
                                            <input type="text" disabled name="model_vehicle" class="form-control credit-card-mask mt-1" value="{{$vehicle->model_vehicle }}">
                                        </div>

                                        <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                            <label for="">Регистрационный номер</label>
                                            <input type="text" disabled name="gus_number_vehicle" class="form-control credit-card-mask mt-1" value="{{$vehicle->gus_number_vehicle}}">
                                        </div>

                                        <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                            <label for="">Количество посадочных мест</label>
                                            <input type="text" disabled name="number_of_seats" class="form-control credit-card-mask mt-1" value="{{$vehicle->number_of_seats}}">
                                        </div>

                                        <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                            <label for="">Примечания</label>
{{--                                            <h4 class="mt-1">{{$vehicle->note_vehicle}}</h4>--}}
                                            <textarea class="form-control mt-1" disabled name="note_vehicle" id="exampleFormControlTextarea1" rows="1" placeholder="{{$vehicle->note_vehicle}}"></textarea>
                                        </div>

                                        <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                            <label class="form" for="">Состояние</label>
                                            <select disabled name="condition_vehicle" id="" class="form-control credit-card-mask mt-1">
                                                <option value="1" @if($vehicle ->condition_vehicle == 1) selected @endif>Активно </option>
                                                <option value="0" @if($vehicle ->condition_vehicle == 0) selected @endif>Не активно </option>
                                            </select>
                                        </div>
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
