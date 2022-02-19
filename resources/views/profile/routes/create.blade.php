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
                                <label for="">Точка отправки</label>
                                <input type="text" name="depart" class="form-control mt-1">
                            </div>

                            <div class="form-group mb-1">
                                <label for="">Конечная остановка</label>
                                <input type="text" name="destination" class="form-control mt-1">
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
