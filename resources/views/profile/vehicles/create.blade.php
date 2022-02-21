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
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="card-body">
                        <form action="{{ route('vehicle.store') }}" method="POST">
                            @csrf
                            @method('POST')

                            <div class="form-group mb-1">
                                <label for="">Тип транспортного средства</label>
                                <select class="form-control mt-1" name="type_ts" id="objectType">
                                    <option value="bus">Автобус</option>
                                    <option value="plane">Легковой транспорт</option>
                                    <option value="minibus">Микроавтобус</option>
                                    <option value="">Черная посаженная приора(оперская)</option>
                                    <option value="">Дядя Мага с пятого поселка на убитой шестерке</option>
                                </select>
                            </div>

                            <div class="form-group mb-1" id="gosNumber">
                                <label for="">Модель</label>
                                <input type="text" name="model_vehicle" class="form-control mt-1">
                            </div>


                            <div class="form-group mb-1" id="gosNumber">
                                <label for="">Регистрационный номер</label>
                                <input type="text" name="gus_number_vehicle" class="form-control mt-1">
                            </div>

                            <button type="submit" class="btn btn-primary">Создать</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
