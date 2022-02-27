@extends('layouts.meta')


@section('page-title')
    Создание ост.пункта
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
                        <form action="{{ route('stopping.store') }}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="form-group mb-1">
                                <label for="">Населённый пункт</label>
                                <input type="text" name="locality" class="form-control mt-1">
                            </div>

                            <div class="form-group mb-1">
                                <label for="">Название остановочного пункта</label>
                                <input type="text" name="name_of_the_stop_point" class="form-control mt-1">
                            </div>

                            <div class="form-group mb-1">
                                <label for="">Адрес</label>
                                <input type="text" name="address" class="form-control mt-1">
                            </div>

                            <div class="form-group mb-1">
                                <label for="">Примечания</label>
                                <textarea class="form-control mt-1" name="note_stopping" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>

                            <div class="form-group mb-1" data-select2-id="45">
                                <label class="form-label" for="basicSelect">Состояние</label>
                                <select name="condition_stopping" id="basicSelect" class="form-select mt-1">
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

