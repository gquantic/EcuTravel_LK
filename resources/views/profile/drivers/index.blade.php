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
                                <div class="col-6 d-flex align-items-center justify-content-start">
                                    <h3 class="mb-0">Водители</h3>
                                </div>
                                <div class="col-6 d-flex align-items-center justify-content-end">
                                    <a href="{{ route('drivers.create') }}">
                                        <button class="dt-button btn btn-primary btn-add-record ms-2" tabindex="0" aria-controls="DataTables_Table_0" type="button"><span>Добавить водителя</span></button>
                                    </a>
                                </div>
                            </div>
                            <table class="invoice-list-table table dataTable no-footer dtr-column table-hover" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                <tr role="row">
                                    <th class="sorting sorting_desc"  aria-controls="DataTables_Table_0" rowspan="1" colspan="1">
                                        #
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1">
                                        Ф.И.О.
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1">
                                        Должность
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1">
                                        Паспорт
                                    </th>
                                    <th class="text-truncate sorting"  aria-controls="DataTables_Table_0" rowspan="1" colspan="1">
                                        Дата поездки
                                    </th>
                                    <th class="text-truncate sorting" aria-controls="DataTables_Table_0" rowspan="1" colspan="1">
                                       Примечание
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
                                            {{ $driver->name }}
                                        </td>
                                        <td>
                                            {{ $driver->position }}
                                        </td>
                                        <td>
                                            {{ substr($driver->passport_number, 0, 2).'** ****'.substr($driver->passport_number, -2) }}
                                        </td>
                                        <td>
                                            {{ $driver->created_at }}
                                        </td>
                                        <td class="text">
                                            {{ $driver->note_drivers }}
                                        </td>
                                        <td style="width: 15px">
                                            <div class="col-2"style="display: flex">
                                            <button type="button" class="btn btn-icon btn-icon rounded-circle btn-flat-success  waves-effect">
                                                <a href="{{ route('drivers.show', $driver)}}"><svg xmlns="http://www.w3.org/2000/svg" data-bs-toggle="tooltip" data-bs-original-title="Подробнее..." width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></a>
                                            </button>

                                            <button type="button" class="btn btn-icon btn-icon rounded-circle btn-flat-primary waves-effect">
                                                <a href="{{ route('drivers.edit', $driver) }}"><svg xmlns="http://www.w3.org/2000/svg" data-bs-toggle="tooltip" data-bs-original-title="Редактировать" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></a>
                                            </button>

                                            <form action="{{ route('drivers.destroy',$driver) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                            <button type="submit" class="btn btn-icon btn-icon rounded-circle btn-flat-danger waves-effect">
                                                <svg xmlns="http://www.w3.org/2000/svg" data-bs-toggle="tooltip" data-bs-original-title="Удалить" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                             </button>
                                            </form>
                                            </div>
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
