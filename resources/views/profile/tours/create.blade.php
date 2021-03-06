@extends('layouts.meta')

@section('page-title')
    Панель
@endsection

@section('page-styles')
    <link rel="stylesheet" href="{{ asset('css/base/pages/dashboard-ecommerce.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
                        <form action="{{ route('tours.store')}}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="form-group mb-1">
                                <label for="">Транспорт</label>
                                <select name="vehicle" id="" class="form-control mt-1">
                                    @foreach($vehicles as $vehicle)
                                        <option value="{{ $vehicle->id}}">
                                            {{$vehicle->model_vehicle}}

                                            {{"({$vehicle->gus_number_vehicle})"}}

                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group mb-1">
                                <label for="">Водитель</label>
                                <select name="driver" id="" class="form-control mt-1">
                                    @foreach($drivers as $driver)
                                        <option>{{ $driver->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group mb-1">
                                <label for="">Водитель 2</label>
                                <select name="driver_2" id=""  class="form-control mt-1">
                                    <option value="">-------</option>

                                    @foreach($drivers as $driver)
                                        <option>{{ $driver->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group mb-1">
                                <label for="">Маршрут</label>
                                <select name="route" id="" class="form-control mt-1 ">
                                    @foreach($routes as $route)
                                        <option value="{{$route->id}}">{{ $route->number_routes. ' - ' . $route->depart_station . ' - ' . $route->arrival_station }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group mb-1">
                                <label for="">Время отправки</label>
                                <input type="time" name="depart_time" id="datetimepicker" class="form-control mt-1 @error('depart_time') is-invalid @enderror">

                                @error('depart_time')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group mb-1">
                                <label for="">Время прибытия</label>
                                <input type="time" name="arrival_time" id="datetimepicker" class="form-control mt-1 @error('arrival_time') is-invalid @enderror">

                                @error('arrival_time')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mb-1 relative">
                                <label for="">Дата отправления</label>
                                <input type="date" name="departure_date" id="datetimepicker" class="form-control mt-1 @error('departure_date') is-invalid @enderror">

                                @error('departure_date')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mb-1">
                                <label for="">Дата прибытия</label>
                                <input type="date" name="arrival_date" id="datetimepicker" class="form-control mt-1 @error('arrival_date') is-invalid @enderror">

                                @error('arrival_date')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group mb-1">
                                <label for="">Примечания</label>
                                <textarea class="form-control mt-1" name="note_tours" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>

                            <div class="form-group mb-1">
                                <label class="form-label" for="basicSelect">Состояние</label>
                                <select name="condition_tours" id="basicSelect" class="form-control mt-1">
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
    <style>

        input[type="date"] {
            position: relative;
        }

        input[type="time"] {
            position: relative;
        }

        input[type="date"]::-webkit-calendar-picker-indicator {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: auto;
            height: auto;
            color: transparent;
            background: transparent;
        }

        input[type="time"]::-webkit-calendar-picker-indicator {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: auto;
            height: auto;
            color: transparent;
            background: transparent;
        }

        input[type="date"]::-webkit-inner-spin-button,
        input[type="date"]::-webkit-clear-button {
            z-index: 1;
        }


        input[type="time"]::-webkit-inner-spin-button,
        input[type="time"]::-webkit-clear-button {
            z-index: 1;
        }

    </style>
@endsection

@section('post-meta')
    <script>
        $(document).ready(function () {
            $('.select2').select2();
        });
    </script>
@endsection
