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
                        <h2 class="content-header float-start mb-0">Просмотр данных о водителе | {{$driver->name}}</h2>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                <a href="{{ route('drivers.index') }}" class="btn btn-primary">Вернутся</a>
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
                                        <label class="form-label" for="credit-card">Ф.И.О.</label>
                                        <input type="text" disabled class="form-control credit-card-mask" value="{{$driver->name}}">
                                    </div>

                                    <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                        <label class="form-label" for="credit-card">Должность</label>
                                        <input type="text" disabled class="form-control credit-card-mask" value="{{$driver->position}}">
                                    </div>

                                    <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                        <label class="form-label" for="credit-card">Паспорт</label>
                                        <input type="text" disabled class="form-control credit-card-mask" value="{{ substr($driver->passport_number, 0, 2).'** ****'.substr($driver->passport_number, -2) }}">
                                    </div>
                                    <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                        <label class="form-label" for="credit-card">Дата поездки </label>
                                        <input type="text" disabled class="form-control credit-card-mask" value="{{ $driver->created_at }}">
                                    </div>

                                    <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                        <label class="form-label" for="credit-card">Дата поездки </label>
                                        <input type="text" disabled class="form-control credit-card-mask" value="{{ $driver->note_drivers}}">
                                    </div>

                                    <div class="col-xl-4 col-md-6 col-sm-12 mb-2" data-select2-id="45">
                                        <label class="form-label" for="basicSelect">Состояние</label>
                                        <select disabled name="condition_driver" id="basicSelect" class="form-control credit-card-mask">
                                            <option value="1" @if($driver -> condition_driver == 1) selected @endif>Активно</option>
                                            <option value="0" @if($driver -> condition_driver == 0) selected @endif>Не активно</option>
                                        </select>
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
