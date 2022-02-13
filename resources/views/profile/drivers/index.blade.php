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
                <div class="card invoice-list-wrapper">
                    <div class="card-datatable table-responsive">
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                            <div class="row p-1 pr-0">
                                <div class="col-12 d-flex align-items-end justify-content-end">
                                    <a href="{{ route('vehicle.create') }}">
                                        <button class="dt-button btn btn-primary btn-add-record ms-2" tabindex="0" aria-controls="DataTables_Table_0" type="button"><span>Добавить перевозчика</span></button>
                                    </a>
                                </div>
                            </div>
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @endif

                            <table class="invoice-list-table table dataTable no-footer dtr-column" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                <tr role="row">
                                    <th class="control sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="display: none;"></th>
                                    <th class="sorting sorting_desc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 46px;" aria-sort="descending" aria-label="#: activate to sort column ascending">
                                        #
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 42px;" aria-label=": activate to sort column ascending">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg></th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 270px;" aria-label="Client: activate to sort column ascending">
                                        Client
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 73px;" aria-label="Total: activate to sort column ascending">
                                        Total
                                    </th>
                                    <th class="text-truncate sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 130px;" aria-label="Issued Date: activate to sort column ascending">
                                        Дата поездки
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 98px;" aria-label="Balance: activate to sort column ascending">
                                        Билетов
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($drivers as $driver)
                                    <tr class="odd">
                                        <td>
                                            {{ $driver->id }}
                                        </td>
                                        <td>
                                            {{ $driver->object_type }}
                                        </td>
                                        <td>
                                            {{ $driver->name }}
                                        </td>
                                        <td>
                                            {{ $driver->gos_number }}
                                        </td>
                                        <td>
                                            {{ $driver->created_at }}
                                        </td>
                                        <td>
                                            {{ $driver->name }}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
