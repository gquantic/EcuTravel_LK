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
                        <form action="{{ route('drivers.store') }}" method="POST">
                            @csrf
                            @method('POST')

                            <div class="form-group mb-1">
                                <label for="">Ф.И.О.</label>
                                <input type="text" value="{{old('name')}}" name="name" class="form-control mt-1 @error('name') is-invalid @enderror">

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group mb-1">
                                <label for="">Серия и номер паспорта</label>
                                <input type="number" value="{{old('passport')}}" name="passport" class="form-control mt-1 @error('passport') is-invalid @enderror">

                                @error('passport')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mb-1">
                                <label for="">Должность</label>
                                <input type="text" value="{{old('position')}}" name="position" class="form-control mt-1 @error('position') is-invalid @enderror">

                                @error('position')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group mb-1">
                                <label for="">Примечания</label>
                                <textarea class="form-control mt-1" placeholder="{{old('note_drivers')}}" name="note_drivers" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>

                            <div class="form-group mb-1" data-select2-id="45">
                                <label class="form-label" for="basicSelect">Состояние</label>
                                <select name="condition_driver" id="basicSelect" class="form-select mt-1">
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
