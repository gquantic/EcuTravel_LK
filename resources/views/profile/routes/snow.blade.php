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
                        <h2 class="content-header float-start mb-0">Просмотр данных о маршруте | {{$route->number_routes}}</h2>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                <a href="{{ route('routes.index') }}" class="btn btn-primary">Вернутся</a>
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
                                        <label class="form-label" for="credit-card">Номер маршрута</label>
                                        <input type="text" disabled class="form-control credit-card-mask" value="{{$route->number_routes}}">
                                    </div>

                                    <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                        <label class="form-label">Тип маршрута</label>
                                        <select disabled name="route_type" class="form-control credit-card-mask">
                                            <option value="intercity" @if($route->route_type == 'intercity') selected @endif>Междугородный</option>
                                            <option value="regional" @if($route->route_type == 'regional') selected @endif>Региональный</option>
                                            <option value="inner_city" @if($route->route_type == 'inner_city') selected @endif>Внутригородской</option>
                                        </select>
                                    </div>

                                    <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                        <label class="form-label" for="credit-card">Станция отправления</label>
                                        <input type="text" disabled class="form-control credit-card-mask" value="{{$route->depart_station}}">
                                    </div>
                                    <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                        <label class="form-label" for="credit-card">Адрес отправления </label>
                                        <input type="text" disabled class="form-control credit-card-mask" value="{{$route->departure_address}}">
                                    </div>

                                    <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                        <label class="form-label" for="credit-card">Станция прибытия </label>
                                        <input type="text" disabled class="form-control credit-card-mask" value="{{$route->arrival_station}}">
                                    </div>

                                    <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                        <label class="form-label" for="credit-card">Адрес прибытия</label>
                                        <input type="text" disabled class="form-control" value="{{$route->arrival_address}}">
                                    </div>

                                    <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                        <label class="form-label" for="credit-card">Базовая стоимость багажа</label>
                                        <input type="text" disabled  class="form-control" value="{{$route->basic_price}}">
                                    </div>

                                    <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                        <label class="form-label" for="credit-card">Стоимость детского билета</label>
                                        <input type="text" disabled class="form-control" value="{{$route->child_price}}">
                                    </div>

                                    <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                        <label class="form-label" for="credit-card">Стоимость багажа</label>
                                        <input type="text" disabled class="form-control" value="{{$route->bag_price}}">
                                    </div>

                                    <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                        <label for="" class="form-label">Состояние</label>
                                        <select disabled name="" id="" class="form-control ">
                                            <option value="1" @if($route->condition_routes == 1) selected @endif>Активно</option>
                                            <option value="0" @if($route->condition_routes == 0) selected @endif>Не активно</option>
                                        </select>
                                    </div>

                                    <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                        <label class="form-label" for="credit-card">Примечания</label>
                                        <textarea type="text"  class="form-control" placeholder="{{$route->note_routes}}"></textarea>
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
