@extends('layouts.meta')


@section('page-title')
    Редактирование ост.пункта
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
                        <h2 class="content-header float-start mb-0">Редактирование данных пункта | {{$stopping->name_of_the_stop_point}}</h2>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                <a href="{{ route('stopping.index') }}" class="btn btn-primary">Вернутся</a>
            </div>
        </div>
        <div class="content-body">
            <!-- Input Mask start -->
            <section id="input-mask-wrapper">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <form action="{{ route('stopping.update', $stopping) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                            <label for="">Населённый пункт</label>
                                            <input type="text" name="locality" class="form-control mt-1" value="{{$stopping->locality}}">
                                        </div>

                                        <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                            <label for="">Название остановочного пункта</label>
                                            <input type="text" name="name_of_the_stop_point" class="form-control mt-1" value="{{$stopping->name_of_the_stop_point}}">
                                        </div>

                                        <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                            <label for="">Адрес</label>
                                            <input type="text" name="address" class="form-control mt-1" value="{{$stopping->address}}">
                                        </div>
                                        
                                        <div class="col-xl-4 col-md-6 col-sm-12 mb-2" data-select2-id="45">
                                            <label class="form-label" for="basicSelect">Состояние</label>
                                            <select  name="condition_stopping" id="basicSelect" class="form-select mt-1">
                                                <option value="1" @if($stopping->сondition_stopping == '1') selected @endif>Активно</option>
                                                <option value="0" @if($stopping->сondition_stopping == '0') selected @endif>Не активно</option>
                                            </select>
                                        </div>

                                        <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                            <label for="">Примечания</label>
                                            <textarea class="form-control mt-1" name="note_stopping" id="exampleFormControlTextarea1" placeholder="{{$stopping->note_stopping}}"></textarea>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Сохранить изменения</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
@endsection
