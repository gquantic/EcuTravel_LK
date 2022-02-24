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
                        <h2 class="content-header-title float-start mb-0">Редактирование данных транспортного средства {{$vehicle->name}}</h2>
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
                            <form action="{{ route('vehicle.update',$vehicle) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                            <label class="form-label">Тип транспортного средства</label>
                                            <select name="route_type" class="form-control credit-card-mask">
                                                <option value="bus" @if($vehicle->type_ts == 'bus') selected @endif>Автобус</option>
                                                <option value="passenger" @if($vehicle->type_ts == 'passenger') selected @endif>Легковой транспорт</option>
                                                <option value="minibus" @if($vehicle->type_ts == 'minibus') selected @endif>Микроавтобус</option>
                                            </select>
                                        </div>

                                        <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                            <label class="form-label" for="credit-card">Модель</label>
                                            <input type="text" class="form-control credit-card-mask @error('model_vehicle') is-invalid @enderror" name="model_vehicle" value="{{$vehicle->model_vehicle}}">

                                            @error('model_vehicle')
                                            <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                            <label class="form-label" for="credit-card">Регистрационный номер</label>
                                            <input type="text" class="form-control credit-card-mask" name="gus_number_vehicle" value="{{$vehicle->gus_number_vehicle}}" >
                                        </div>

                                        <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                            <label class="form-label">Примечания</label>
                                            <textarea class="form-control" name="note_drivers" id="exampleFormControlTextarea1" placeholder="{{$vehicle->note_vehicle}}" rows="1"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <button type="submit" class="btn btn-primary align-content-end">Сохранить изменения</button>
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
