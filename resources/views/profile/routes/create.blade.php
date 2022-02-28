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
                        <form action="{{ route('routes.store') }}" method="POST">
                            @csrf
                            @method('POST')

                            <div class="form-group mb-1">
                                <label for="">Номер маршрута</label>
                                <input type="number" name="number_routes" class="form-control mt-1 @error('number_routes') is-invalid @enderror" >

                                @error('number_routes')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group mb-1">
                                <label for="">Тип маршрута</label>
                                <select name="route_type" id="objectType" class="form-control mt-1">
                                    <option value="intercity">Междугородный</option>
                                    <option value="regional">Региональный</option>
                                    <option value="inner_city">Внутригородской</option>
                                </select>
                            </div>

                            <div class="form-group mb-1">
                                <label for="">Станция отправления</label>
                                <select name="depart_station" id="" class="form-control mt-1">
                                    @foreach($stoppings as $stopping)
                                        <option value=" {{ $stopping->id }}">  {{ $stopping->address }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group mb-1">
                                <label for="">Адрес отправления</label>
                                <select name="departure_address" id="" class="form-control mt-1">
                                    @foreach($stoppings as $stopping)
                                        <option value=" {{ $stopping->id }}">  {{ $stopping->name_of_the_stop_point }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group mb-1">
                                <label for="">Станция прибытия</label>
                                <input type="text" name="arrival_station" class="form-control mt-1 @error('arrival_station') is-invalid @enderror">
                                @error('arrival_station')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group mb-1">
                                <label for="">Адрес прибытия</label>
                                <input type="text" name="arrival_address" class="form-control mt-1 @error('arrival_address') is-invalid @enderror">
                                @error('arrival_address')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group mb-1">
                                <label for="">Базовая стоимость билета</label>
                                <input type="number" name="basic_price" class="form-control mt-1 @error('basic_price') is-invalid @enderror">
                                @error('basic_price')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group mb-1">
                                <label for="">Стоимость детского билета</label>
                                <input type="number" name="child_price" class="form-control mt-1 @error('child_price') is-invalid @enderror">
                                @error('child_price')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group mb-1">
                                <label for="">Стоимость багажа</label>
                                <input type="number" name="bag_price" class="form-control mt-1 @error('bag_price') is-invalid @enderror">
                                @error('bag_price')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group mb-1">
                                <label for="">Примечания</label>
                                <textarea class="form-control mt-1" name="note_routes" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>

                            <div class="form-group mb-1">
                                <label for="">Состояние</label>
                                <select name="condition_routes" id="" class="form-control mt-1">
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

@section('post-meta')
    <script>
        $(document).ready(function () {
            $('#objectType').on('input', function () {
                let newType = $(this).val();
                if (newType === 'bus') {
                    $('#gosNumber').removeClass('hidden');
                } else {
                    $('#gosNumber').addClass('hidden');
                }
            });
        });
    </script>
@endsection
