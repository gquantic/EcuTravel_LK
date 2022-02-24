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
                        <h2 class="content-header-title float-start mb-0">Редактирование данных водителя {{$driver->name}}</h2>
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
                            <form action="{{ route('drivers.update',$driver) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                            <label class="form-label" for="credit-card">Ф.И.О</label>
                                            <input type="text" class="form-control credit-card-mask" name="name" value="{{$driver->name}}">
                                        </div>

                                        <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                            <label class="form-label" for="credit-card">Должность</label>
                                            <input type="text" class="form-control credit-card-mask" name="position" value="{{$driver->position}}">
                                        </div>

                                        <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                            <label class="form-label" for="credit-card">Паспорт</label>
                                            <input type="text" class="form-control credit-card-mask" name="passport_number" value="{{ substr($driver->passport_number, 0, 2).'** ****'.substr($driver->passport_number, -2) }}" placeholder="0000 0000 0000 0000" id="credit-card">
                                        </div>
                                        <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                            <label class="form-label" for="credit-card">Дата поездки</label>
                                            <input type="text" class="form-control credit-card-mask" name="created_at" value="{{ $driver->created_at }}">
                                        </div>

                                        <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                            <label for="">Примечания</label>
                                            <textarea class="form-control mt-1" name="note_drivers" id="exampleFormControlTextarea1" rows="3"></textarea>
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
