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
                                    <a href="{{ route('routes.create') }}">
                                        <button class="dt-button btn btn-primary btn-add-record ms-2" tabindex="0" aria-controls="DataTables_Table_0" type="button"><span>Добавить маршрут</span></button>
                                    </a>
                                </div>
                            </div>
                            <table class="invoice-list-table table dataTable no-footer dtr-column" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                <tr role="row">
                                    <th class="control sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="display: none;"></th>
                                    <th class="sorting sorting_desc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 46px;" aria-sort="descending" aria-label="#: activate to sort column ascending">
                                        Номер маршрута
                                    </th>

                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 42px;" aria-label=": activate to sort column ascending">
                                        Тип маршрута
                                    </th>

                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 98px;" aria-label="Client: activate to sort column ascending">
                                        Станция отправления
                                    </th>

                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 73px;" aria-label="Total: activate to sort column ascending">
                                        Станция прибытия
                                    </th>

                                    <th class="text-truncate sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 130px;" aria-label="Issued Date: activate to sort column ascending">
                                        Дата поездки
                                    </th>

                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 98px;" aria-label="Balance: activate to sort column ascending">
                                        Станция прибытия
                                    </th>

                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 98px;" aria-label="Balance: activate to sort column ascending">
                                        Адрес прибытия
                                    </th>

                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 98px;" aria-label="Balance: activate to sort column ascending">
                                        Номер маршрута
                                    </th>

                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 98px;" aria-label="Balance: activate to sort column ascending">
                                        Примечание
                                    </th>

                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 98px;" aria-label="Balance: activate to sort column ascending">
                                        Базовая стоимость багажа
                                    </th>

                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 98px;" aria-label="Balance: activate to sort column ascending">
                                        Стоимость детского билета
                                    </th>

                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 98px;" aria-label="Balance: activate to sort column ascending">
                                        Стоимость багажа
                                    </th>

                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 98px;" aria-label="Balance: activate to sort column ascending">

                                    </th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($routes as $route)
                                    <tr class="odd">
                                        <td>
                                            {{ $route->id }}
                                        </td>
                                        <td>
                                            @switch($route->route_type)
                                                @case('intercity')
                                                Междугородный
                                                @break
                                                @case('regional')
                                                Региональный
                                                @break
                                                @case('inner_city')
                                                Внутригородской
                                                @break
                                            @endswitch
                                        </td>
                                        <td>
                                            {{ $route->depart_station }}
                                        </td>
                                        <td>
                                            {{ $route->departure_address }}
                                        </td>
                                        <td>
                                            {{ $route->arrival_station }}
                                        </td>
                                        <td>
                                            {{ $route->arrival_address }}
                                        </td>

                                        <td>
                                            {{ $route->number_routes }}
                                        </td>
                                        <td>
                                            {{ $route->note_routes }}
                                        </td>

                                        <td>
                                            {{ $route->basic_price}}
                                        </td>

                                        <td>
                                            {{ $route->child_price }}
                                        </td>

                                        <td>
                                            {{ $route->bag_price }}
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
