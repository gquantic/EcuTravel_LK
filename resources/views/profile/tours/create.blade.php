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
                        <form action="{{ route('tours.store') }}" method="POST">
                            @csrf
                            @method('POST')

                            <div class="form-group mb-1">
                                <label for="">Транспорт</label>
                                <select name="vehicle" id="" class="form-control mt-1">
                                    @foreach($vehicles as $vehicle)
                                        <option value="{{ $vehicle->id }}"> {{ "$vehicle->type_ts [{$vehicle->gus_number_vehicle}]" }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group mb-1">
                                <label for="">Водитель</label>
                                <select name="drivers[]" id="" class="form-control mt-1 select2 select2-selection--multiple" multiple>
                                    @foreach($drivers as $driver)
                                        <option value="{{ $driver->id }}">{{ $driver->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group mb-1">
                                <label for="">Маршрут</label>
                                <select name="route" id="" class="form-control mt-1">
                                    @foreach($routes as $route)
                                        <option value="{{ $route->id }}">{{ $route->from . ' - ' . $route->destination}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group mb-1">
                                <label for="">Время отправки</label>
                                <input type="datetime-local" name="depart_time" class="form-control mt-1">
                            </div>

                            <div class="form-group mb-1">
                                <label for="">Время прибытия</label>
                                <input type="datetime-local" name="arrival_time" class="form-control mt-1">
                            </div>

                            <div class="form-group mb-1">
                                <label for="">Цена за взрослый билет</label>
                                <input type="text" name="adult_price" class="form-control mt-1">
                            </div>

                            <div class="form-group mb-1">
                                <label for="">Цена за детский билет</label>
                                <input type="text" name="child_price" class="form-control mt-1">
                            </div>

                            <div class="form-group mb-1">
                                <label for="">Цена за багаж</label>
                                <input type="text" name="bag_price" class="form-control mt-1">
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
            $('.select2').select2();
        });
    </script>
@endsection
